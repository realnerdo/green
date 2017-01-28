<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    /**
     * Shows the products in the Search.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('search', compact('products'));
    }

    public function search(Request $request)
    {
        $s = $request->input('search');
        $products = Product::where('title', 'LIKE', '%'.$s.'%')->get();
        return view('search', compact('products', 's'));
    }
}
