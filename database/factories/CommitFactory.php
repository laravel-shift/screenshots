<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'message' => $this->faker->word(),
            'info' => $this->faker->boolean(),
        ];
    }
}
