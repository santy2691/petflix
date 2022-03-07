<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirectorxMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DirectorxMovie::factory(16)->create();
    }
}
