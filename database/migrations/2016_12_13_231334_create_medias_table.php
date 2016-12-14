<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('original_name');
            $table->string('url');
            $table->enum('type', [
                'image',
                'audio',
                'video',
                'document'
            ]);
            $table->timestamps();
        });

        Schema::create('media_user', function(Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')
                    ->references('id')
                    ->on('medias');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');

            $table->timestamps();
        });

        Schema::create('media_page', function(Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')
                    ->references('id')
                    ->on('medias');

            $table->integer('page_id')->unsigned()->index();
            $table->foreign('page_id')
                    ->references('id')
                    ->on('pages');

            $table->timestamps();
        });

        Schema::create('media_product', function(Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')
                    ->references('id')
                    ->on('medias');

            $table->integer('product_id')->unsigned()->index();
            $table->foreign('product_id')
                    ->references('id')
                    ->on('products');

            $table->timestamps();
        });

        Schema::create('collection_media', function(Blueprint $table) {
            $table->integer('media_id')->unsigned()->index();
            $table->foreign('media_id')
                    ->references('id')
                    ->on('medias');

            $table->integer('collection_id')->unsigned()->index();
            $table->foreign('collection_id')
                    ->references('id')
                    ->on('collections');

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
        Schema::table('media_user', function(Blueprint $table) {
            $table->dropForeign(['media_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::table('media_page', function(Blueprint $table) {
            $table->dropForeign(['media_id']);
            $table->dropForeign(['page_id']);
        });

        Schema::table('media_product', function(Blueprint $table) {
            $table->dropForeign(['media_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::table('collection_media', function(Blueprint $table) {
            $table->dropForeign(['media_id']);
            $table->dropForeign(['collection_id']);
        });

        Schema::drop('media_user');
        Schema::drop('media_page');
        Schema::drop('media_product');
        Schema::drop('collection_media');
        Schema::drop('medias');
    }
}
