<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorCategoryRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_category_relship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Numb')->nullable(false);
            $table->tinyInteger('Level')->default(0)->nullable(false);
            $table->tinyInteger('Type')->default(0)->nullable(false);
            $table->integer('author_ID')->unsigned();
            $table->foreign('author_ID')->references('id')->on('author');
            $table->integer('category_ID')->unsigned();
            $table->foreign('category_ID')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_category_relship');
    }
}
