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
            'name' => $this->faker->sentence,
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640,480),
            'descripcion' => $this->faker->paragraph,
            'price' => $this->faker->randomElement([9.99,9,19,99,39.99,49.99,59.99,69.99,79.99,89.99,99.99]),
            'body' => $this->faker->text,
        ];
    }
}
