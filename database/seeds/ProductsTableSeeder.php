<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Product;
use App\Media;
use App\Category;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$seller = User::where('role', 'seller')->first();

        $products = factory('App\Product', 50)
                    ->create(['user_id' => $seller->id])
                    ->each(function($p){
                        $media = factory('App\Media')->create();
                        $category = Category::orderByRaw("RAND()")->first();
                        $p->medias()->sync([$media->id]);
                        $p->categories()->sync([$category->id]);
                    });

        // $seller->products()->create([
        // 	'title' => 'Producto de ejemplo 1',
        // 	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam enim ipsum error impedit libero nemo pariatur, dicta hic. Doloribus!',
        // 	'sku' => '00001',
        // 	'regular_price' => 150.00,
        // 	'sale_price' => 140.00,
        // 	'stock' => 100
        // ]);

        // $seller->products()->create([
        // 	'title' => 'Producto de ejemplo 2',
        // 	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam enim ipsum error impedit libero nemo pariatur, dicta hic. Doloribus!',
        // 	'sku' => '00002',
        // 	'regular_price' => 180.00,
        // 	'sale_price' => 160.00,
        // 	'stock' => 95
        // ]);

        // $seller->products()->create([
        // 	'title' => 'Producto de ejemplo 3',
        // 	'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aperiam enim ipsum error impedit libero nemo pariatur, dicta hic. Doloribus!',
        // 	'sku' => '00003',
        // 	'regular_price' => 49.00,
        // 	'stock' => 45
        // ]);
    }
}
