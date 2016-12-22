<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    /**
     * Shows the shopping cart.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        $products = Product::all();
        return view('cart', compact('products'));
    }

    /**
     * Shows the checkout.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout()
    {
        $products = Product::all();
        return view('checkout', compact('products'));
    }
    /**
     * Shows the Thank You Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function thankyou()
    {
        $products = Product::all();
        return view('thankyou', compact('products'));
    }
}
