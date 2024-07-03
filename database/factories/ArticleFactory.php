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
            'image' => fake()->image(null, 600, 400),
            'user_id' => 1,
            'category_id' => 1,
            'country' => fake('it_IT')->word(1),
            'city' => fake('it_IT')->word(1),
            'condition' => fake('it_IT')->word(1),


        ];
    }
}
