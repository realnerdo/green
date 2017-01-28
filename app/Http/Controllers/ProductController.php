<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use App\Category;
use App\Media;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;

class ProductController extends Controller
{
    /**
     * Shows a list of the user products
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Auth::user()->products()->paginate(5);
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Shows the single product.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $single = $product;
        $related = Product::take(4)->get();
        return view('single_product', compact('single', 'related'));
    }

    /**
     * Shows the create form.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.products.create', compact('categories'));
    }

    /**
     * Stores a product in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Auth::user()->products()->create($request->all());

        $this->syncCats($product, $request->input('category_list'));

        if($request->hasFile('photos'))
            $this->uploadFile($product, $request->file('photos'));

        session()->flash('flash_message', 'Se ha publicado el producto: '.$product->title);

        return redirect('dashboard/productos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.products.edit', compact('product', 'categories'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  UpdateProductRequest  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());

        $this->syncCats($product, $request->input('category_list'));

        if($request->hasFile('photos'))
            $this->uploadFile($product, $request->file('photos'));

        session()->flash('flash_message', 'Se ha actualizado el producto: '.$product->title);

        return redirect('dashboard/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->categories()->sync([]);
        $product->medias()->sync([]);
        $product->delete();
        session()->flash('flash_message', 'Se ha eliminado tu producto');
        return redirect('dashboard/productos');
    }

    /**
     * Sync up the list of categories in the database
     *
     * @param  Product $product
     * @param  array|null $categories
     */
    private function syncCats($product, $categories)
    {
        if(is_null($categories))
            $tags = ['General'];
        $currentCategories = array_filter($categories, 'is_numeric');
        $newCategories = array_diff($categories, $currentCategories);
        foreach($newCategories as $newCategory):
            if($category = Category::create(['title' => $newCategory]))
                $currentCategories[] = $category->id;
        endforeach;
        $product->categories()->sync($currentCategories);
    }

    /**
     * Upload File with Request
     *
     * @param  Product $product
     * @param  \Illuminate\Http\Request::file() $files
     */
    private function uploadFile($product, $files)
    {
        foreach ($files as $file) {
            $url = $file->store('public/products');
            $media = Media::create([
                'title' => $file->getClientOriginalName(),
                'url' => str_replace('public/', '', $url),
                'original_name' => $file->getClientOriginalName(),
                'type' => 'image'
            ]);
            $product->medias()->sync([$media->id]);
        }
    }
}
