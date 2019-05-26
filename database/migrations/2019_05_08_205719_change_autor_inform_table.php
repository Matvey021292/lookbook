<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeAutorInformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('author_inform', function (Blueprint $table) {
           $table->integer('id_author')->unsigned();
           $table->foreign('id_author')->references('id')->on('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('author_inform', function (Blueprint $table) {
            //
        });
    }
}
