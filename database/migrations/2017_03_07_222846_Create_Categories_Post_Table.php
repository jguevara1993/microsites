<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('category_post', function (Blueprint $table) {
         $table->increments('id');
         $table->integer('categories_id')->unsigned();
         $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
         $table->integer('post_id')->unsigned();
         $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
        Schema::dropIfExists('category_post');
    }
}
