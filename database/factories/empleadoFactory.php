<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\empleado>
 */
class empleadoFactory extends Factory
{

    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => $this->faker->randomDigit(10),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'eps' => $this->faker->randomElement(['Sura', 'AsmetSalud', 'ColSalud', 'FlorezSalud']),
            'stateSubsidy' => $this->faker->randomDigit(),
            'confirmationDate' => $this->faker->date(),
            'legalizationDate' => $this->faker->date(),
        ];
    }
}
