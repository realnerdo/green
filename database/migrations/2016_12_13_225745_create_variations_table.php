<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVariationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('description');
        });

        Schema::create('product_variation', function(Blueprint $table) {
            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products');

            $table->integer('variation_id')->unsigned()->index();
            $table->foreign('variation_id')
                    ->references('id')
                    ->on('variations');

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
        Schema::table('product_variation', function(Blueprint $table) {
            $table->dropForeign(['product_id']);
            $table->dropForeign(['variation_id']);
        });

        Schema::drop('product_variation');
        Schema::drop('variations');
    }
}
