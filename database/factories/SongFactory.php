<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genre_id' => \App\Models\Genre::all()->random()->id,
            'name' => $this->faker->word(),
            'artist' => $this->faker->name(),
            'duration' => $this->faker->time()
        ];
    }
}
