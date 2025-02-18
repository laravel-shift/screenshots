<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ShiftFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->word(),
            'published_at' => $this->faker->dateTime(),
            'slug' => $this->faker->slug(),
        ];
    }
}
