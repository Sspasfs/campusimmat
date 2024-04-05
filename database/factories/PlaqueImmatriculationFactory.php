<?php

namespace Database\Factories;

use App\Models\PlaqueImmatriculation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlaqueImmatriculationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Suppose there are existing Eleve records in the database
        $eleves = \App\Models\Eleve::all();

        return [
            'numero' => $this->faker->unique()->randomNumber(6),
            // Pick a random existing Eleve's ID
            'eleve_id' => $eleves->random()->id,
        ];
    }
}
