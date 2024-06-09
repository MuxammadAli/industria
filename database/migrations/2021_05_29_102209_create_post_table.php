<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('slug')->nullable();
            $table->integer('lang')->nullable();
            $table->string('lang_hash')->nullable();
            $table->integer('top')->default(0);
            $table->integer('popular')->default(0);
            $table->string('description', 500)->nullable();
            $table->integer('type')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('photo_author')->nullable();
            $table->integer('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category');
            $table->integer('status')->default(0);
            $table->timestamp('published_at');
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
        Schema::dropIfExists('post');
    }
}
