<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateTableBookGenreRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_genre_relship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('id')->on('book');
            $table->integer('genre_ID')->unsigned();
            $table->foreign('genre_ID')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_genre_relship');
    }
}
