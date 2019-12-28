<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBookCategoryRelship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_category_relship', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Numb')->nullable(false);
            $table->tinyInteger('Level')->default(0)->nullable(false);
            $table->tinyInteger('Type')->default(0)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_category_relship');
    }
}
