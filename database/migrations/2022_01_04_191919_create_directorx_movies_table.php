<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorxMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorx_movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_movie');
            $table->unsignedBigInteger('id_director');
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('id_director')->references('id')->on('directors')->onDelete('cascade');
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
        Schema::dropIfExists('directorx_movies');
    }
}
