<?php

namespace Database\Factories;
use App\Models\Constructor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Constructor>
 */
class ConstructorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Constructor::class;

    public function definition(): array
    {



        return [
            'constructor_name' => fake()->company(),

        ];
    }
}
