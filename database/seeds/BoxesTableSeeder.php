<?php

use Illuminate\Database\Seeder;
use App\User;

class BoxesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$seller = User::where('role', 'seller')->first();

    	$seller->boxes()->create([
    		'name' => 'Chica',
    		'length' => 40,
    		'height' => 40,
    		'width' => 40
    	]);

    	$seller->boxes()->create([
    		'name' => 'Mediana',
    		'length' => 60,
    		'height' => 60,
    		'width' => 60
    	]);

    	$seller->boxes()->create([
    		'name' => 'Grande',
    		'length' => 68,
    		'height' => 68,
    		'width' => 68
    	]);
    }
}
