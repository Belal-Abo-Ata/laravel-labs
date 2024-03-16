<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => fake()->sentence,
            'body'          => fake()->paragraphs(3, true),
            'enabled'       => fake()->boolean,
            'published_at'  => fake()->dateTimeBetween('-1 year', 'now'),
            'user_id' => random_int(1, 30)
        ];
    }
}
