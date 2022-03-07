<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert(
            [
                [
                    'aname' => 'Keanu Reeves'
                ],
                [
                    'aname' => 'Brad Pete'
                ],
                [
                    'aname' => 'Keanu Reeves'
                ],
                [
                    'aname' => 'Will Smith'
                ],
                [
                    'aname' => 'Leonardo DiCaprio'
                ],
                [
                    'aname' => 'Angelina Jolie'
                ],
                [
                    'aname' => 'Scarlett Johansson'
                ],
                [
                    'aname' => 'Denzel Washington'
                ],
                [
                    'aname' => 'Natalie Portman'
                ],
                [
                    'aname' => 'Nicole Kidman'
                ],
                [
                    'aname' => 'Robert De Niro'
                ]
            ]
        );
    }
}
