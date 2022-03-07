<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorxMovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_movie' => $this->faker->unique()->randomElement([1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16]),
            'id_director' => $this->faker->randomElement([1,2,3,4,5,6,7])
        ];
    }
}
