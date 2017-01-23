<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table) {
            $table->increments('id');
            $table->string('tracking_number');
            $table->string('tracking_url');
            $table->string('label_url');
            $table->date('delivery_date');
            $table->enum('payment_method', ['visa', 'mastercard', 'americanexpress', 'oxxo', 'banorte']);
            $table->enum('status', ['pending', 'confirmed', 'transit', 'delivered']);
            $table->integer('address_id')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->timestamps();

            $table->foreign('address_id')
                    ->references('id')
                    ->on('addresses');

            $table->foreign('cart_id')
                    ->references('id')
                    ->on('carts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function(Blueprint $table) {
            $table->dropForeign(['address_id']);
            $table->dropForeign(['cart_id']);
        });

        Schema::drop('orders');
    }
}
