<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Episode>
 */
class EpisodeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->word,
                'duration' =>$this->faker->numberBetween(0, 50),
                'rating' => $this->faker->numberBetween(0, 5),
                'number_of_episodes' => $this->faker->numberBetween(0, 22),
                'date' => $this->faker->date(),
                'show_id' => 1
        ];
    }
}
