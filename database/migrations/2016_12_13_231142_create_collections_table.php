<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('collection_product', function(Blueprint $table) {
            $table->integer('collection_id')->unsigned()->index();
            $table->foreign('collection_id')
                    ->references('id')
                    ->on('collections');

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
        Schema::table('collection_product', function(Blueprint $table) {
            $table->dropForeign(['collection_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::drop('collection_product');
        Schema::drop('collections');
    }
}
