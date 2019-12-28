<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableBookGenreRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_genre_relship', function (Blueprint $table) {
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('ID')->on('book');
            $table->integer('genre_ID')->unsigned();
            $table->foreign('genre_ID')->references('ID')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_genre_relship', function (Blueprint $table) {
            //
        });
    }
}
