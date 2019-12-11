<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marker', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('book');
            $table->string('first_line');
            $table->integer('offset');
            $table->string('part');
            $table->integer('title');
            $table->string('xpath');
            $table->timestamp('created_at')->nullable();
            $table->string('resource_uri')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marker');
    }
}
