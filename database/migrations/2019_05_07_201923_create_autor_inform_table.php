<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorInformTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author_inform', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nid')->unsigned()->default(0)->nullable(false);
            $table->string('Title',255)->nullable(false);
            $table->longText('Body')->default(Null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author_inform');
    }
}
