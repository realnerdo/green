<?php

use Illuminate\Database\Seeder;
use App\Country;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = Country::create(['name' => 'México', 'code' => 'MX']);
        $state = $country->states()->create(['name' => 'Yucatán', 'code' => 'YUC']);
        $city = $state->cities()->create(['name' => 'Mérida', 'code' => 'MID']);
    }
}
