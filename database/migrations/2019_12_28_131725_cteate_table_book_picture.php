<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateTableBookPicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_picture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nid')->unsigned()->default(0)->nullable(false);
            $table->string('File', 255)->default('')->nullable(false);   
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
        Schema::dropIfExists('book_picture');
    }
}
