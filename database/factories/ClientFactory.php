<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // juridical informations
            'name' => fake()->name(),
            'content' => fake()->sentences(5, true),
            'social_reason' => fake()->sentence(1),
            'juridical_status' => fake()->randomElement(['EI', 'EIRL', 'EURL', 'SARL', 'SNC', 'SEARL', 'SCP', 'SAS', 'SASU']),
            'capital' => fake()->numberBetween(1000, 1000000000),
            'siret_number' => fake()->randomNumber(9),
            'naf_code' => fake()->word(3),
            // address
            'country' => fake()->country(),
            'address' => fake()->address(),
            'zipcode' => fake()->randomNumber(5),
            'city' => fake()->city(),
        ];
    }
}
