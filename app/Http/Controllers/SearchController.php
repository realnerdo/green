<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Shows the products in the Search.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
}
