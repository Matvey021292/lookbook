<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteateTableAuthorPicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_picture', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nid')->unsigned()->default(0)->nullable(false);
            $table->string('File', 255)->default('')->nullable(false);   
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
        Schema::dropIfExists('author_picture');
    }
}
