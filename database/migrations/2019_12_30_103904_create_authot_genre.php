<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthotGenre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_genre_relship', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_ID')->unsigned();
            $table->foreign('author_ID')->references('id')->on('author');
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
        Schema::dropIfExists('author_genre_relship');
    }
}
