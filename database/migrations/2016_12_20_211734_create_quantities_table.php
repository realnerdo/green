<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuantitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantities', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->timestamps();
        });

        Schema::create('cart_quantity', function(Blueprint $table) {
            $table->integer('cart_id')->unsigned()->index();
            $table->foreign('cart_id')
                    ->references('id')
                    ->on('carts');

            $table->integer('quantity_id')->unsigned()->index();
            $table->foreign('quantity_id')
                    ->references('id')
                    ->on('quantities');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cart_quantity', function(Blueprint $table) {
            $table->dropForeign(['cart_id']);
            $table->dropForeign(['quantity_id']);
        });

        Schema::drop('cart_quantity');
        Schema::drop('quantities');
    }
}
