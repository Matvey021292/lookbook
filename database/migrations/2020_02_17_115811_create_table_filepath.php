<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFilepath extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filepath', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('id')->on('book');
            $table->string('Path');
            $table->string('Format');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filepath');
    }
}
