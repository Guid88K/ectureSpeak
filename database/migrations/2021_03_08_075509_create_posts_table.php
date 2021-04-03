<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name_post');
            $table->text('content_post')->nullable();
            $table->string('category_post');
            $table->string('preview')->nullable();
            $table->string('autor')->nullable();
            $table->integer('user_id');
            $table->string('file')->nullable();
            $table->string('type_file')->nullable();
            $table->string('url_for_file')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
