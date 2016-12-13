<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
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
