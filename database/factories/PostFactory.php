<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence($this->faker->numberBetween(2, 4)),
            'subtitle' => $this->faker->sentence($this->faker->numberBetween(1, 3)),
            'body' => $this->faker->paragraph,
            'min_to_read' =>$this->faker->numberBetween(1, 50),
            'user_id' => 1
        ];
    }
}
