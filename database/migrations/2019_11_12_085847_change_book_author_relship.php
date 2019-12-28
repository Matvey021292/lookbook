<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBookAuthorRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_author_relship', function (Blueprint $table) {
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('ID')->on('book');
            $table->integer('author_ID')->unsigned();
            $table->foreign('author_ID')->references('ID')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_author_relship', function (Blueprint $table) {
            //
        });
    }
}
