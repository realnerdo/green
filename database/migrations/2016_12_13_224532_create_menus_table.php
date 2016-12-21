<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('link_menu', function(Blueprint $table) {
            $table->integer('link_id')->unsigned()->index();
            $table->foreign('link_id')
                    ->references('id')
                    ->on('links');

            $table->integer('menu_id')->unsigned()->index();
            $table->foreign('menu_id')
                    ->references('id')
                    ->on('menus');

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
        Schema::table('link_menu', function(Blueprint $table) {
            $table->dropForeign(['link_id']);
            $table->dropForeign(['menu_id']);
        });

        Schema::drop('link_menu');
        Schema::drop('menus');
    }
}
