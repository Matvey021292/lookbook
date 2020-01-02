<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookFormatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filename', function (Blueprint $table) {
            $table->increments('id');
            $table->string('FileName')->unique();
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('id')->on('book');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_format');
    }
}
