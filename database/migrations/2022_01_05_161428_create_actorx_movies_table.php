<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorxMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actorx_movies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_movie');
            $table->unsignedBigInteger('id_actor');
            $table->foreign('id_movie')->references('id')->on('movies')->onDelete('cascade');
            $table->foreign('id_actor')->references('id')->on('actors')->onDelete('cascade');
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
        Schema::dropIfExists('actorx_movies');
    }
}
