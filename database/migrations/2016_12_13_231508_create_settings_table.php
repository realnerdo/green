<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->string('footer');
            $table->integer('favicon')->unsigned();
            $table->integer('logo')->unsigned();
            $table->timestamps();

            $table->foreign('favicon')
                    ->references('id')
                    ->on('medias');

            $table->foreign('logo')
                    ->references('id')
                    ->on('medias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function(Blueprint $table) {
            $table->dropForeign(['favicon']);
            $table->dropForeign(['logo']);
        });

        Schema::drop('settings');
    }
}
