<?php

namespace Database\Factories;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mascota>
 */
class mascotaFactory extends Factory
{
    protected $model = Mascota::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'owner' => $this->faker->name(),
            'race' => $this->faker->randomElement(['Afghan Husky', 'Elk Husky', 'Wild Spaniel', 'Rock Slayer', 'Miniature Coastal Bulldog', 'Jackal Fisher', 'Pyrenean Tracker', 'Deer Pacer', 'Creole']),
            'weight' => $this->faker->randomDigit(),
            'height' => $this->faker->randomDigit(),
            'width' => $this->faker->randomDigit(),
            'birthday' => $this->faker->date(),
            'lastVaccination' => $this->faker->date(),
        ];
    }
}
