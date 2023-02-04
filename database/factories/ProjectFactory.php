<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // Project Responsible
            'client_id' => Client::inRandomOrder()->first()->id,
            'last_name' => fake()->lastName(),
            'first_name' => fake()->firstName(),
            'phone' => '0033' . fake()->numberBetween(10000000, 99999999),
            'email' => fake()->email(),
            // Project informations
            'title' => fake()->title(),
            'content' => fake()->sentences(4, true),
            'begining_project_date' => fake()->date(),
            'ending_project_date' => fake()->date(),
            'project_status' => fake()->randomElement(['terminé', 'en_cours', 'annulé']),
            'days_spent' => fake()->numberBetween(1, 50),
        ];
    }
}
