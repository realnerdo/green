<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('url');
            $table->integer('page_id')->unsigned();
            $table->timestamps();

            $table->foreign('page_id')
                    ->references('id')
                    ->on('pages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('links', function(Blueprint $table) {
            $table->dropForeign(['page_id']);
        });

        Schema::drop('links');
    }
}
