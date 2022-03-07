<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'action', 
            'description' => 'Los elementos más frecuentes de una película de acción son persecuciones '
            .'(tanto a pie como con vehículos), tiroteos, enfrentamientos, artes marciales y luchas callejeras, '
            .'armas, explosiones, agresiones y cualquier situación violenta o intensa.']);

        DB::table('genres')->insert([
            'name' => 'comedy', 
            'description' => 'La comedia ​ es el género dramático opuesto a la tragedia​ y, por lo tanto, relacionado casi siempre con historias con final feliz']);
    }
}
