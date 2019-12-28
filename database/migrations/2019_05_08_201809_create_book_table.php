<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('ID');
            // $table->timestamps();
            $table->integer('FileSize')->unsigned()->default(0)->nullable(false);
            $table->timestamp('Time')->useCurrent();
            $table->string('Title', 254)->default('')->nullable(false);
            $table->string('Title1', 254)->default('')->nullable(false);
            $table->char('Lang', 3)->default('ru')->nullable(false);
            $table->smallInteger('LangEx')->default(0)->nullable(false);
            $table->char('SrcLang', 3)->default('')->nullable(false);
            $table->char('FileType', 4)->default('')->nullable(false);
            $table->string('Encoding', 32)->default('')->nullable(false);
            $table->smallInteger('Year')->default(0)->nullable(false);
            $table->char('Deleted', 1)->default(0)->nullable(false);
            $table->string('Ver', 8)->default('')->nullable(false);
            $table->string('FileAuthor', 64)->default('')->nullable(false);
            $table->integer('N')->default(0)->nullable(false);
            $table->string('keywords', 255)->default('')->nullable(false);
            $table->binary('md5');
            $table->timestamp('Modified')->useCurrent();
            $table->char('pmd5', 32)->default('')->nullable(false);
            $table->tinyInteger('InfoCode')->default(0)->nullable(false);
            $table->integer('Pages')->unsigned()->default(0)->nullable(false);
            $table->integer('Chars')->unsigned()->default(0)->nullable(false);
            // $table->string('link');
            // $table->string('slug');
            // $table->string('category_book_id');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
