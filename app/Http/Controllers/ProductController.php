<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Product;
use App\Category;
use App\Media;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

class ProductController extends Controller
{
    /**
     * Shows a list of the user products
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        $view = 'products';
        return view('dashboard', compact('view', 'products'));
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
        $view = 'products.create';
        return view('dashboard', compact('view', 'categories'));
    }

    /**
     * Stores a product in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Auth::user()->products()->create($request->all());
        $variation = $product->variations()->create([
            'title' => $product->title,
            'description' => $product->description
        ]);

        $this->syncCats($product, $request->input('category_list'));

        $variation->meta()->create($request->all());

        if($request->hasFile('photo'))
            $this->uploadFile($product, $request->file('photo'));

        session()->flash('flash_message', 'Se ha publicado tu producto');

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
        $view = 'products.edit';
        return view('dashboard', compact('view', 'product', 'categories'));
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

        //variation

        $this->syncCats($product, $request->input('category_list'));

        if($request->hasFile('photo'))
            $this->uploadFile($product, $request->file('photo'));

        session()->flash('flash_message', 'Se ha actualizado tu producto');

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
     * @param  \Illuminate\Http\Request::file() $file
     */
    private function uploadFile($product, $file)
    {
        $uploadedFile = $this->s3Upload($file, 'products');
        $media = Media::create([
            'title' => $uploadedFile['file_name'],
            'url' => $uploadedFile['public_url'],
            'original_name' => $uploadedFile['original_name'],
            'type' => 'image'
        ]);
        $product->medias()->sync([$media->id]);
    }

    /**
     * Upload file to Amazon s3
     *
     * @param  UploadedFile $file
     * @param  String $subdirectory
     * @return Array $uploadedFile
     */
    private function s3Upload($file, $subdirectory)
    {
        $client_original_name = $file->getClientOriginalName();
        $fileName = time() . '_' . $client_original_name;
        $destinationPath = 'uploads/' . $subdirectory;
        $path = $destinationPath . '/' . $fileName;
        $image = Image::make($file->getRealPath());
        $image->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $stream = $image->stream();
        $s3 = Storage::disk('s3');
        $s3->put($path, $stream->__toString(), 'public');
        $client = $s3->getDriver()->getAdapter()->getClient();
        $public_url = $client->getObjectUrl(env('S3_BUCKET'), $path);
        $original_name = pathinfo($client_original_name, PATHINFO_FILENAME);
        $uploadedFile = [
            'original_name' => $original_name,
            'file_name' => $fileName,
            'public_url' => $public_url
        ];
        return $uploadedFile;
    }
}
