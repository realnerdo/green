<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PageRequest;
use App\Http\Requests\UpdatePageRequest;
use App\Page;

class PageController extends Controller
{
    /**
     * Shows a list of the pages
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->paginate(5);
        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Shows the page.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('single_page', compact('page'));
    }

    /**
     * Shows the create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.create');
    }

    /**
     * Stores a page in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PageRequest $request)
    {
        $page = Page::create($request->all());

        session()->flash('flash_message', 'Se ha publicado la página: '.$page->title);

        return redirect('dashboard/paginas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('dashboard.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  UpdateCategoryRequest  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->all());

        session()->flash('flash_message', 'Se ha actualizado la página: '.$page->title);

        return redirect('dashboard/paginas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        session()->flash('flash_message', 'Se ha eliminado la página');
        return redirect('dashboard/paginas');
    }

}
