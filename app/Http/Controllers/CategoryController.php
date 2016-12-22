<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Shows a list of the categories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        $view = 'categories';
        return view('dashboard', compact('view', 'categories'));
    }

    /**
     * Shows the products related to the category.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // $category = $product;
        // $related = Product::take(4)->get();
        // return view('single_product', compact('single', 'related'));
    }

    /**
     * Shows the create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = 'categories.create';
        return view('dashboard', compact('view'));
    }

    /**
     * Stores a category in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());

        session()->flash('flash_message', 'Se ha publicado la categoría');

        return redirect('dashboard/categorias');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $view = 'categories.edit';
        return view('dashboard', compact('view', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  UpdateCategoryRequest  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());

        session()->flash('flash_message', 'Se ha actualizado la categoría');

        return redirect('dashboard/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('flash_message', 'Se ha eliminado la categoría');
        return redirect('dashboard/categorias');
    }

}
