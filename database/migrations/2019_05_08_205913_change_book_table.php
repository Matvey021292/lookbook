<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book', function (Blueprint $table) {
            //
            $table->integer('author_id')->unsigned();
            $table->foreign('author_id')->references('id')->on('author');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categoty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book', function (Blueprint $table) {
            //
        });
    }
}
