<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('session');
            $table->integer('user_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('carts', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::drop('carts');
    }
}
