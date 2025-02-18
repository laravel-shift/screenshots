<?php

namespace Database\Factories;

use App\Models\Commit;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'message' => $this->faker->word(),
            'info' => $this->faker->boolean(),
        ];
    }
}
