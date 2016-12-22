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
            $table->timestamps();
        });

        Schema::create('order_product', function(Blueprint $table) {
            $table->integer('order_id')->unsigned()->index();
            $table->foreign('order_id')
                    ->references('id')
                    ->on('orders');

            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products');

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
        Schema::table('order_product', function(Blueprint $table) {
            $table->dropForeign(['order_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::drop('order_product');
        Schema::drop('orders');
    }
}
