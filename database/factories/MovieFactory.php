<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'age_group' => $this->faker->numberBetween(12, 18),
            'title' => $this->faker->word,
            'description' => $this->faker->word,
                'duration' =>$this->faker->numberBetween(0, 100),
                'rating' => $this->faker->numberBetween(0, 5),
                'new_releases' => rand(0,1),
                'date' => $this->faker->date(),
        ];
    }
}
