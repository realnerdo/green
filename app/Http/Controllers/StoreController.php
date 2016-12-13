<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Shows the products in the Store.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('store');
    }
}
