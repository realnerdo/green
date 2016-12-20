<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Shows a list of the user orders
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = 'orders';
        return view('dashboard', compact('page'));
    }
}
