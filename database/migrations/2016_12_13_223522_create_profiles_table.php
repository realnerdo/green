<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('address');
            $table->string('zipcode');
            $table->string('rfc');
            $table->string('clabe');
            $table->string('company');
            $table->integer('city_id')->unsigned();
            $table->timestamps();

            $table->foreign('city_id')
                    ->references('id')
                    ->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function(Blueprint $table) {
            $table->dropForeign(['city_id']);
        });

        Schema::drop('profiles');
    }
}
