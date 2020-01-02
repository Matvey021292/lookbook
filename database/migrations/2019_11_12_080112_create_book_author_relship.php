<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookAuthorRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_author_relship', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('Pos')->unsigned()->default(0)->nullable(false);
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('id')->on('book');
            $table->integer('author_ID')->unsigned();
            $table->foreign('author_ID')->references('id')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_author_relship');
    }
}
