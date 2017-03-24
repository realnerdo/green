<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Media::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'original_name' => $faker->sentence(6),
        'url' => "https://loremflickr.com/270/400/plant?random=".$faker->numberBetween(1,50),
        'type' => 'image'
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6),
        'description' => $faker->text(150),
        'sku' => str_random(5),
        'regular_price' => $faker->randomFloat(2, 10, 400),
        'sale_price' => $faker->randomFloat(2, 9, 380),
        'stock' => $faker->numberBetween(10, 100),
        'length' => $faker->randomFloat(2, 5, 68),
        'height' => $faker->randomFloat(2, 5, 68),
        'width' => $faker->randomFloat(2, 5, 68),
        'weight' => $faker->randomFloat(2, 1, 64)
    ];
});
