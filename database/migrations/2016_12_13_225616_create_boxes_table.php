<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('length');
            $table->float('height');
            $table->float('width');
            $table->integer('user_id')->unsigned();
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
        Schema::table('boxes', function(Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::drop('boxes');
    }
}
