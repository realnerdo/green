<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use Auth;
use App\Box;
use App\Product;
use App\Cart;
use App\Quantity;
use App\Country;
use App\State;
use App\City;
use Conekta\Conekta;
use Conekta\Charge;
use Conekta\Customer;
use Conekta\Order;
use App\BPBox;
use App\BPItem;
use DVDoug\BoxPacker\Packer as BPPacker;

class StoreController extends Controller
{
    /**
     * Shows the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCart()
    {
        $cart = $this->getCart();
        return view('cart', compact('cart'));
    }

    /**
     * Stores a cart in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeCart(CartRequest $request)
    {
        $cart = $this->getCart();

        $product_exists = $cart->quantities()->where('product_id', $request->input('product_id'))->first();

        if($product_exists){
            $product_exists->quantity = $product_exists->quantity + $request->input('quantity');
            $product_exists->save();
        }else{
            $cart->quantities()
                ->create([
                    'quantity' => $request->input('quantity'),
                    'product_id' => $request->input('product_id'),
                    'cart_id' => $cart->id
                ]);
        }

        session()->flash('flash_message', 'Se ha agregado tu producto al carrito');

        return back();
    }

    /**
     * Update cart quantities
     *
     * @param  Request $request
     * @param  Cart    $cart
     * @return redirect
     */
    public function updateCart(Request $request, Cart $cart)
    {
        $subtotal = 0;
        foreach ($request->input('quantities') as $id => $item) {
            $quantity = Quantity::find($id);
            if($quantity){
                $quantity->update($item);
            }else{
                $quantity = $cart->quantities()->create([
                    'quantity' => $item['quantity'],
                    'product_id' => $item['product_id']
                ]);
            }
            $product = Product::find($item['product_id']);
            $price = (!is_null($product->sale_price)) ? $product->sale_price : $product->regular_price;
            $subtotal = $subtotal + ($item['quantity'] * $price);
        }

        $cart->update(['subtotal' => $subtotal]);

        return redirect('pago');
    }

    /**
     * Remove the specified item from cart. (ajax)
     *
     * @param  Quantity $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroyItem(Quantity $quantity)
    {
        if($quantity->delete()){
            session()->flash('flash_message', 'Se ha eliminado el producto del carrito');
            return response('success', 200);
        }
    }

    /**
     * Shows the checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCheckout()
    {
        $countries = Country::pluck('name', 'id');
        $states = State::pluck('name', 'id');
        $cities = City::pluck('name', 'id');

        $cart = $this->getCart();
        $allPackedBoxes = $this->getPackedBoxes($cart);

        // Create addresses
        $create_address_url = 'https://app.mienvio.mx/api/addresses';

        // Create address from
        $addresses_from = [];

        foreach ($allPackedBoxes as $id => $data) {
            $data_from = [
                'object_type' => 'QUOTE',
                'zipcode' => $data['user']->profile->zipcode
            ];

            $decoded_from = $this->callApi('POST', $create_address_url, $data_from);
            $addresses_from[$id]['address_from'] = $decoded_from->address->object_id;
            $addresses_from[$id]['packedBoxes'] = $data['packedBoxes'];
        }

        // Create address to
        $data_to = [
            'object_type' => 'QUOTE',
            'zipcode' => Auth::user()->profile->zipcode
        ];
        $decoded_to = $this->callApi('POST', $create_address_url, $data_to);
        $address_to = $decoded_to->address->object_id;

        // Create shipment
        $create_shipment_url = 'https://app.mienvio.mx/api/shipments';
        $decoded_shipments = [];

        foreach ($addresses_from as $id => $address_from) {
            foreach ($address_from['packedBoxes'] as $packedBox) {
                // Description
                $description = 'Envío '.time();

                $boxType = $packedBox->getBox();
                $data_shipment = [
                    'object_purpose' => 'QUOTE',
                    'address_from' => $address_from['address_from'],
                    'address_to' => $address_to,
                    'weight' => $packedBox->getWeight() / 1000,
                    'length' => $boxType->getOuterLength() / 10,
                    'height' => $boxType->getOuterDepth() / 10,
                    'width' => $boxType->getOuterWidth() / 10,
                    'description' => $description
                ];
                $decoded_shipments[] = $this->callApi('POST', $create_shipment_url, $data_shipment);
            }
        }

        $shipment_id = $decoded_shipments[0]->shipment->object_id;

        $get_rates_url = 'https://app.mienvio.mx/api/shipments/' . $shipment_id . '/rates';

        $decoded_rates = $this->callApi('GET', $get_rates_url);

        $rates = [];

        foreach($decoded_rates->results as $rate){
            $rates[$rate->object_id] = $rate->provider . ' ' . $rate->servicelevel . ' - ' . $rate->duration_terms . ' ($' . $rate->amount . ')';
        }

        return view('checkout', compact('cart', 'countries', 'states', 'cities', 'rates'));
    }

    private function getPackedBoxes($cart)
    {
        $sellers = [];

        foreach ($cart->quantities as $item) {
            $sellers[$item->product->user->id]['user'] = $item->product->user;
            $sellers[$item->product->user->id]['products'][$item->product->id]['title'] = $item->product->title;
            $sellers[$item->product->user->id]['products'][$item->product->id]['length'] = $item->product->length;
            $sellers[$item->product->user->id]['products'][$item->product->id]['height'] = $item->product->height;
            $sellers[$item->product->user->id]['products'][$item->product->id]['width'] = $item->product->width;
            $sellers[$item->product->user->id]['products'][$item->product->id]['weight'] = $item->product->weight;
            $sellers[$item->product->user->id]['total_weight'] = (isset($sellers[$item->product->user->id]['total_weight'])) ? $sellers[$item->product->user->id]['total_weight'] + $item->product->weight : $item->product->weight;
        }

        foreach ($sellers as $id => $seller) {
            $packer = new BPPacker();
            foreach ($seller['user']->boxes as $box) {
                $outerWidth = $box->width * 10;
                $outerLength = $box->length * 10;
                $outerDepth = $box->height * 10;
                $emptyWeight = $box->weight * 1000;
                $innerWidth = $outerWidth - 10;
                $innerLength = $outerLength - 10;
                $innerDepth = $outerDepth - 10;
                $maxWeight = 64000;
                $packer->addBox(new BPBox($box->name, $outerWidth, $outerLength, $outerDepth, $emptyWeight, $innerWidth, $innerLength, $innerDepth, $maxWeight));
            }
            foreach ($seller['products'] as $product) {
                $width = $product['width'] * 10;
                $length = $product['length'] * 10;
                $height = $product['height'] * 10;
                $weight = $product['weight'] * 1000;
                $packer->addItem(new BPItem($product['title'], $width, $length, $height, $weight, true));
            }
            $allPackedBoxes[$id]['packedBoxes'] = $packer->pack();
            $allPackedBoxes[$id]['user'] = $seller['user'];
        }

        return $allPackedBoxes;
    }

    public function conekta(Request $request)
    {
      Conekta::setApiKey(env('CONEKTA_SECRET'));
      Conekta::setApiVersion("2.0.0");
      Conekta::setLocale('es');

      $billing = $request->input('billing');
      $billing_name = $billing['firstname'] . " " . $billing['lastname'];

      $customer = Customer::create([
        'name' => $billing_name,
        'email' => $billing['email'],
        'phone' => $billing['phone'],
        'payment_sources' => [
            [
                'type' => 'card',
                'token_id' => 'tok_test_visa_4242'
            ]
        ]
      ]);

      // dd($customer->payment_sources->metadata->id);

      $line_items = [];
      $line_items = [
          [
              "name" => "Tacos",
              "unit_price" => 1000,
              "quantity" => 12
          ]

      ];

      //Create array for line_items
      //name
      //unit_price
      //quantity

      $shipping_lines = [];
      $shipping_lines = [
          [
              "amount" => 1500,
              "carrier" => "mi compañia"
          ]
      ];
      //Create array with shipping details
      //amount
      //carrier

      $city = 'Merida';
      $state = 'Yucatan';
      $country = 'MX';

      $shipping = $request->input('shipping');

      $order = Order::create([
          'line_items' => $line_items,
          'shipping_lines' => $shipping_lines,
          'currency' => 'mxn',
          'customer_info' => [
                'customer_id' => $customer->id,
          ],
          'shipping_contact' => [
                'phone' => $shipping['phone'],
                'receiver' => $shipping['firstname'] . " " . $shipping['firstname'],
                'address' => [
                    'street1' => $shipping['address'],
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                    'postal_code' => $shipping['zipcode'],
                    'residential' => true
                ]
          ],
          'charges' => [
              [
                    'payment_source' => [
                        'id' => $customer->payment_sources->metadata->id,
                        'type' => 'card'
                  ]
              ]
          ]
      ]);

      dd($order);

    }

    /**
     * Shows the Thank You Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showThankyou()
    {
        $cart = $this->getCart();
        return view('thankyou', compact('cart'));
    }

    /**
     * Get cart from database or create a new one.
     *
     * @return Cart $cart
     */
    private function getCart()
    {
        if (Auth::check()) {
            $cart = Auth::user()->cart()->first();
            if(!$cart){
                $cart = Auth::user()->cart()->create([
                    'user_id' => Auth::user()->id
                ]);
            }
            $quantities = $cart->quantities;

            if(session()->has('cart')){
                $session_cart = Cart::where('session', session('cart'))->first();
                foreach ($session_cart->quantities as $session_quantity) {
                        $session_quantity->update(['cart_id' => $cart->id]);

                        // foreach ($quantities as $quantity) {
                        //     if($quantity->product_id == $session_quantity->product_id){
                        //         $new_quantity = $session_quantity->replicate();
                        //         $new_quantity->cart_id = $cart->id;
                        //         $new_quantity->quantity = $session_quantity->quantity + $quantity->quantity;
                        //         $new_quantity->save();
                        //     }
                        // }

                        // $session_quantity->cart_id = $cart->id;
                        // $session_quantity->save();
                }
                $session_cart->delete();
                session()->forget('cart');
                $cart = Auth::user()->cart()->first();
            }
        }else{
            if(session()->has('cart')){
                $cart = Cart::where('session', session('cart'))->first();
            }else{
                session(['cart' => time().str_random(14)]);
            }

            if(!isset($cart) || !$cart)
                $cart = Cart::create(['session' => session('cart')]);
        }

        return $cart;
    }

    public function mienvio()
    {
        $create_address_url = 'https://mienvio.mx/api/addresses';
        $create_shipment_url = 'https://mienvio.mx/api/shipments';
        $get_rates_url = 'https://mienvio.mx/api/shipments/23883/rates';

        // $data = [
        //     'object_type' => 'QUOTE',
        //     'name' => 'Asael Jaimes',
        //     'email' => 'asaelx@gmail.com',
        //     'phone' => '9993708552',
        //     'zipcode' => '97203',
        //     'street' => 'Calle 3C #284',
        //     'street2' => 'Residencial Galerías'
        // ];

        $data = [
            'object_purpose' => 'QUOTE',
            'address_from' => 44806,
            'address_to' => 44807,
            'weight' => 64,
            'length' => 68,
            'height' => 68,
            'width' => 68,
            'description' => 'Producto de ejemplo'
        ];

        // 44806
        // 44807
        //
        // 23883

        $decoded = $this->callApi('POST', $create_shipment_url, $data);

        dd($decoded);
    }

    private function callApi($method, $url, $data = false)
    {;
        $curl = curl_init($url);

        $headers = ['authorization: Bearer ' . env('MIENVIO_KEY')];

        if($method == 'POST'){
            curl_setopt($curl, CURLOPT_POST, true);
            if($data){
                $data = http_build_query($data);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            }
        }

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $curl_response = curl_exec($curl);

        curl_close($curl);

        $decoded = json_decode($curl_response);

        return $decoded;
    }
}
