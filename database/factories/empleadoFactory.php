<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Empleado;

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
            'phone' => $this->faker->phoneNumber(),
            'name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'eps' => $this->faker->name(),
            'stateSubsidy' => $this->faker->name(),
            'confirmationDate' => $this->faker->date(),
            'legalizationDate' => $this->faker->randomElement(['Sura', 'AsmetSalud', 'ColSalud', 'FlorezSalud']),
        ];
    }
}
