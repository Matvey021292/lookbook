<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableBookCategoryRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_category_relship', function (Blueprint $table) {
            $table->integer('book_ID')->unsigned();
            $table->foreign('book_ID')->references('ID')->on('book');
            $table->integer('category_ID')->unsigned();
            $table->foreign('category_ID')->references('ID')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_category_relship', function (Blueprint $table) {
            //
        });
    }
}
