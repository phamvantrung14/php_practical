<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
//            $table->id();
            $table->integer("bookid")->autoIncrement();
            $table->integer("authorid")->default(0);
            $table->string("title");
            $table->string("ISBN");
            $table->smallInteger("pub_year");
            $table->tinyInteger("avaliable")->default(0);
            $table->timestamps();
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
