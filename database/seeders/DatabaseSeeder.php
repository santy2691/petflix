<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // creacion del datos ficticios de la table users y la table Movies
        // el factory viene de la ruta /database/factories
        // hay se encuentra los factories de Movie y de user
         \App\Models\User::factory(10)->create();


    $this->call([
        MovieSeeder::class,
        GenreSeeder::class,
        MoviexGenreSeeder::class,
        DirectorSeeder::class,
        DirectorxMovieSeeder::class,
        ActorSeeder::class,
        ActorxMovieSeeder::class,
    ]);




    }

}

