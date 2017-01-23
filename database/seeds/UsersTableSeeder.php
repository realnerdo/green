<?php

use Illuminate\Database\Seeder;
use App\User;
use App\City;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'username' => 'admin',
        	'email' => 'admin@ventasverdes.mx',
        	'password' => bcrypt('admin'),
        	'role' => 'admin'
        ]);

        $city = City::where('code', 'MID')->first();

        $seller = User::create([
        	'username' => 'vendedor',
        	'email' => 'vendedor@ventasverdes.mx',
        	'password' => bcrypt('vendedor'),
        	'role' => 'seller'
        ]);

        $seller->profile()->create([
        	'firstname' => 'John',
        	'lastname' => 'Smith',
        	'phone' => '9997777777',
        	'address' => 'Calle 77',
        	'zipcode' => '97203',
        	'rfc' => 'JOHN891508L8A',
        	'clabe' => '9249832646382',
        	'company' => 'Real John',
        	'city_id' => $city->id
        ]);

        $seller->addresses()->create([
        	'address' => $seller->profile->address,
        	'zipcode' => $seller->profile->zipcode,
        	'city_id' => $city->id
        ]);

        $customer = User::create([
        	'username' => 'comprador',
        	'email' => 'comprador@ventasverdes.mx',
        	'password' => bcrypt('comprador'),
        	'role' => 'customer'
        ]);

        $customer->profile()->create([
        	'firstname' => 'Jane',
        	'lastname' => 'Doe',
        	'phone' => '9998888888',
        	'address' => 'Calle 88',
        	'zipcode' => '97203',
        	'rfc' => 'JANE891508L8A',
        	'clabe' => '3328494923498',
        	'company' => 'Real Jane',
        	'city_id' => $city->id
        ]);

        $customer->addresses()->create([
        	'address' => $customer->profile->address,
        	'zipcode' => $customer->profile->zipcode,
        	'city_id' => $city->id
        ]);

        $customer->addresses()->create([
        	'address' => 'Calle 33',
        	'zipcode' => '97200',
        	'city_id' => $city->id
        ]);
    }
}
