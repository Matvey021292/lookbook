<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableAuthorPicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('author_picture', function (Blueprint $table) {
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
        Schema::table('author_picture', function (Blueprint $table) {
            //
        });
    }
}
