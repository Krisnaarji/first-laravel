<?php

namespace Database\Factories;
use App\Models\Constructor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grids>
 */
class GridFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'constructor_id' => Constructor::factory(),
            'driver_name' => $driverName = fake()->firstName() . ' ' . fake()->lastName(),
            'racing_number' => fake()->numberBetween(10, 99),
            'path' => ('images/' . str_replace(' ', '', strtolower($driverName)) . '.png'),
        ];
    }
}
