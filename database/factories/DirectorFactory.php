<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dname' => $this->faker->unique()->randomElement(['Steven Spilberg', 'Stanley Kubrick', 'Quentin Tarantino', 'Martin Scorsese', 'David Lynch', 'George Lucas', 'Peter Jackson']),
        ];
    }
}
