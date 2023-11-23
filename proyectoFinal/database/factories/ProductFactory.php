<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => ProductCategory::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(4),
            'image' => $this->faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
            'price' => $this->faker->randomDigit,
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph,
        ];
    }
}
