<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviexGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generos de las peliculas 
        DB::table('movies_x_genres')->insert(['id_movie' => 1, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 2, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 3, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 4, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 5, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 6, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 7, 'id_genre' => 1]);
        DB::table('movies_x_genres')->insert(['id_movie' => 8, 'id_genre' => 1]);
        // comedia
        DB::table('movies_x_genres')->insert(
            [
                ['id_movie' => 9, 'id_genre' => 2],
                ['id_movie' => 10, 'id_genre' => 2],
                ['id_movie' => 11, 'id_genre' => 2],
                ['id_movie' => 12, 'id_genre' => 2],
                ['id_movie' => 13, 'id_genre' => 2],
                ['id_movie' => 14, 'id_genre' => 2],
                ['id_movie' => 15, 'id_genre' => 2],
                ['id_movie' => 16, 'id_genre' => 2]
            ]
        );
    }
}
