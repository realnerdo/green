<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Quantity;

class CartController extends Controller
{
    /**
     * Shows the cart page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = $this->getCart();
        $items = $cart->quantities;
        return view('cart', compact('items'));
    }

    /**
     * Stores a cart in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CartRequest $request)
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
     * Remove the specified resource from storage.
     *
     * @param  Quantity $quantity
     * @return \Illuminate\Http\Response
     */
    public function destroyItem(Quantity $quantity)
    {
        $quantity->delete();
        session()->flash('flash_message', 'Se ha eliminado el producto del carrito');
        return back();
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
                    foreach ($quantities as $quantity) {
                        if($quantity->product_id == $session_quantity->product_id){
                            $new_quantity = $session_quantity->replicate();
                            $new_quantity->cart_id = $cart->id;
                            $new_quantity->quantity = $session_quantity->quantity + $quantity->quantity;
                            $new_quantity->save();
                        }
                    }
                    $session_quantity->cart_id = $cart->id;
                    $session_quantity->save();
                }
                $session_cart->delete();
                session()->forget('cart');
                $cart = Auth::user()->cart()->first();
            }
        }else{
            if(session()->has('cart')){
                $cart = Cart::where('session', session('cart'))->first();
            }else{
                session(['cart' => str_random(14)]);
                $cart = Cart::create([
                    'session' => session('cart')
                ]);
            }
        }

        return $cart;
    }
}
