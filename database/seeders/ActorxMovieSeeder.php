<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorxMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actorx_movies')->insert(
            [
                ['id_movie' => 1, 'id_actor' => 1],
                ['id_movie' => 1, 'id_actor' => 2],
                ['id_movie' => 1, 'id_actor' => 3],

                ['id_movie' => 2, 'id_actor' => 4],
                ['id_movie' => 2, 'id_actor' => 5],
                ['id_movie' => 2, 'id_actor' => 6],

                ['id_movie' => 3, 'id_actor' => 2],
                ['id_movie' => 3, 'id_actor' => 4],
                ['id_movie' => 3, 'id_actor' => 7],

                ['id_movie' => 4, 'id_actor' => 11],
                ['id_movie' => 4, 'id_actor' => 10],
                ['id_movie' => 4, 'id_actor' => 9],

                ['id_movie' => 5, 'id_actor' => 8],
                ['id_movie' => 5, 'id_actor' => 7],
                ['id_movie' => 5, 'id_actor' => 6],

                ['id_movie' => 6, 'id_actor' => 5],
                ['id_movie' => 6, 'id_actor' => 4],
                ['id_movie' => 6, 'id_actor' => 3],

                ['id_movie' => 7, 'id_actor' => 1],
                ['id_movie' => 7, 'id_actor' => 5],
                ['id_movie' => 7, 'id_actor' => 7],

                ['id_movie' => 8, 'id_actor' => 5],
                ['id_movie' => 8, 'id_actor' => 7],
                ['id_movie' => 8, 'id_actor' => 9],

                ['id_movie' => 9, 'id_actor' => 6],
                ['id_movie' => 9, 'id_actor' => 7],
                ['id_movie' => 9, 'id_actor' => 8],

                ['id_movie' => 10, 'id_actor' => 11],
                ['id_movie' => 10, 'id_actor' => 10],
                ['id_movie' => 10, 'id_actor' => 1],

                ['id_movie' => 11, 'id_actor' => 3],
                ['id_movie' => 11, 'id_actor' => 7],
                ['id_movie' => 11, 'id_actor' => 9],

                ['id_movie' => 12, 'id_actor' => 6],
                ['id_movie' => 12, 'id_actor' => 7],
                ['id_movie' => 12, 'id_actor' => 11],

                ['id_movie' => 13, 'id_actor' => 2],
                ['id_movie' => 13, 'id_actor' => 5],
                ['id_movie' => 13, 'id_actor' => 11],

                ['id_movie' => 14, 'id_actor' => 1],
                ['id_movie' => 14, 'id_actor' => 2],
                ['id_movie' => 14, 'id_actor' => 3],

                ['id_movie' => 15, 'id_actor' => 6],
                ['id_movie' => 15, 'id_actor' => 7],
                ['id_movie' => 15, 'id_actor' => 8],

                ['id_movie' => 16, 'id_actor' => 7],
                ['id_movie' => 16, 'id_actor' => 9],
                ['id_movie' => 16, 'id_actor' => 10],


            ]
        );
    }
}
