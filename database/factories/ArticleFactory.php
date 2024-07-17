<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake('it_IT')->word(2),
            'price' => fake()->randomNumber(3, false),
            'body' => fake('it_IT')->text(30),
            'user_id' => 1,
            'category_id' => fake()->randomDigitNotNull(0),
            'country' => 'Italy',
            'city' => fake('it_IT')->word(1),
            'condition' => 'Nuovo',
            'status' => true,
        ];
    }
}
