<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Shows a list of the user collections
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = 'collections';
        return view('dashboard', compact('view'));
    }

    /**
     * Show the collection.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('single_collection');
    }
}
