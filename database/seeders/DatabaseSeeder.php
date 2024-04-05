<?php

namespace Database\Seeders;

use App\Models\Eleve;
use App\Models\PlaqueImmatriculation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer 20 élèves
        Eleve::factory(20)->create();

        // Créer 30 plaques d'immatriculation
        PlaqueImmatriculation::factory(30)->create();
    }
}
