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
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween($min = 10000, $max = 99999),
            'available' => $this->faker->boolean(),
            'image' => $this->faker->randomElement(['img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg']),
            'slug' => $this->faker->unique()->word(),
            'category_id' => ProductCategory::inRandomOrder()->first()->id,
        ];
    }
}
