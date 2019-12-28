<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableBookPicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_picture', function (Blueprint $table) {
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('ID')->on('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_picture', function (Blueprint $table) {
            //
        });
    }
}
