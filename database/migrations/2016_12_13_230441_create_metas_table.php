<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->float('regular_price');
            $table->float('sale_price');
            $table->float('stock');
            $table->integer('product_id')->unsigned();
            $table->integer('variation_id')->unsigned();
            $table->timestamps();

            $table->foreign('product_id')
                    ->references('id')
                    ->on('products');

            $table->foreign('variation_id')
                    ->references('id')
                    ->on('variations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('metas', function(Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['variation_id']);
        });

        Schema::drop('metas');
    }
}
