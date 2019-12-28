<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('author', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('FirstName', 99)->default('')->nullable(false);
            $table->string('MiddleName', 99)->default('')->nullable(false);
            $table->string('LastName', 99)->default('')->nullable(false);
            $table->string('NickName', 33)->default('')->nullable(false);
            $table->integer('uid')->default(0)->nullable(false);
            $table->string('Email', 255)->default('')->nullable(false);
            $table->string('HomePage', 255)->default('')->nullable(false);
            $table->char('Gender', 1)->default('')->nullable(false);
            $table->integer('MasterID')->default(0)->nullable(false);
            $table->string('slug')->default('')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('author');
    }
}
