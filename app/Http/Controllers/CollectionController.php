<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collection;

class CollectionController extends Controller
{
    /**
     * Shows a list of the user collections
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::latest()->paginate(5);
        return view('dashboard.collections.index', compact('collections'));
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
