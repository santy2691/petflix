<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'data_premiere' => $this->faker->dateTime(),
            'sinopsis' => $this->faker->text(),
            'duration' => $this->faker->time(),
            'type' => 'movie',
            'urlFile' => $this->faker->url(),
            'season' => 0,
            'chapter' => 0,
        ];
    }
}
