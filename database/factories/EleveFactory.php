<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ecoles = ['AFTEC', 'IPAC Bachelor Factory', 'MyDigitalSchool', 'IHECF', 'WIN', 'Studio M', 'MBWAY'];

        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'ecole' => $this->faker->randomElement($ecoles),
        ];
    }
}
