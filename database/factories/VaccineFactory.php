<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vaccine>
 */
class VaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'batch' => fake()->regexify('[A-Z]{5}[0-4]{4}'),
            'expiry' => fake()->dateTimeBetween('+2 years', '+5 years'),
        ];
    }
}
