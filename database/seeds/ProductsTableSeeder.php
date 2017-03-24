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
    }
}
