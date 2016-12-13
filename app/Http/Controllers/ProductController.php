<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Shows the single product.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('single_product');
    }
}
