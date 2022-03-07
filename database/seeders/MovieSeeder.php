<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'title' => 'Guardians of the Galaxy',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'marvel',
            'duration' => '2:00',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img1.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img1.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        DB::table('movies')->insert([
            'title' => ' X Men',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'marvel',
            'duration' => '2:30',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img2.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img2.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        DB::table('movies')->insert([
            'title' => 'Spiderman',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'marvel',
            'duration' => '1:50',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img3.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img3.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        DB::table('movies')->insert([
            'title' => 'Hulk',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'marvel',
            'duration' => '2:00',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img4.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img4.jpg',
            'season' => 0,
            'chapter' => 0
        ]);


        DB::table('movies')->insert([
            'title' => 'Superman',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'dc comic',
            'duration' => '2:10',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img5.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img5.jpg',
            'season' => 0,
            'chapter' => 0
        ]);



        DB::table('movies')->insert([
            'title' => 'Mad Max',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'warner',
            'duration' => '2:10',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img6.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img6.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        DB::table('movies')->insert([
            'title' => 'Hard to Kill',
            'data_premiere' => Carbon::now(),
            'sinopsis' => 'warner',
            'duration' => '2:10',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img7.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img7.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        DB::table('movies')->insert([
            'title' => 'terminator',
            'data_premiere' => Carbon::now(),
            'sinopsis' => '	Metro Goldwyn Mayer',
            'duration' => '2:10',
            'type' => 'movie',
            'urlFile' => 'img/movies/thumbnailmk2/img8.jpg',
            'imagen' => 'img/movies/thumbnailmk2/img8.jpg',
            'season' => 0,
            'chapter' => 0
        ]);

        // comedy
        DB::table('movies')->insert(
            [
                [
                    'title' => "Mr. Bean's Holidays",
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img9.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img9.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'Idiocracy',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img10.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img10.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'The life of Brian',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img11.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img11.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'Fear and Loathing in Las Vegas',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img12.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img12.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'Ace Ventura',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img13.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img13.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'American Pie',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img14.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img14.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'Torrente',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img15.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img15.jpg',
                    'season' => 0,
                    'chapter' => 0
                ],
                [
                    'title' => 'Dumb and Dumber',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img16.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img16.jpg',
                    'season' => 1,
                    'chapter' => 1
                ],
                [
                    'title' => 'Dumb and Dumber',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	Metro Goldwyn Mayer',
                    'duration' => '2:10',
                    'type' => 'movie',
                    'urlFile' => 'img/movies/thumbnailmk2/img16.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/img16.jpg',
                    'season' => 1,
                    'chapter' => 2
                ],
                [
                    'title' => 'Game of thrones',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	HBO',
                    'duration' => '2:10',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'season' => 1,
                    'chapter' => 1
                ],
                [
                    'title' => 'Game of thrones',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	HBO',
                    'duration' => '2:10',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'season' => 1,
                    'chapter' => 2
                ],
                [
                    'title' => 'Game of thrones',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	HBO',
                    'duration' => '2:10',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'season' => 1,
                    'chapter' => 3
                ],
                [
                    'title' => 'Game of thrones',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => '	HBO',
                    'duration' => '2:10',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/game-of-thrones-videojuego-4.jpg',
                    'season' => 1,
                    'chapter' => 4
                ],
                [
                    'title' => 'Squid Game',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'imagen' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'season' => 1,
                    'chapter' => 1
                ],
                [
                    'title' => 'Squid Game',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'imagen' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'season' => 1,
                    'chapter' => 2
                ],
                [
                    'title' => 'Squid Game',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'imagen' => 'img/movies/thumbnailmk2/squid-game.jpeg',
                    'season' => 1,
                    'chapter' => 3
                ],
                [
                    'title' => 'Cobra Kai',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'season' => 1,
                    'chapter' => 1
                ],                [
                    'title' => 'Cobra Kai',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'season' => 1,
                    'chapter' => 2
                ],                [
                    'title' => 'Cobra Kai',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'season' => 2,
                    'chapter' => 1
                ],                [
                    'title' => 'Cobra Kai',
                    'data_premiere' => Carbon::now(),
                    'sinopsis' => 'Netflix',
                    'duration' => '20:00',
                    'type' => 'serie',
                    'urlFile' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'imagen' => 'img/movies/thumbnailmk2/cobra-kai.jpg',
                    'season' => 2,
                    'chapter' => 2
                ]
            ]
        );
    }
}
