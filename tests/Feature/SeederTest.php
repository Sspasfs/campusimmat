<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Eleve;
use App\Models\PlaqueImmatriculation;

class SeederTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test seeding of Eleve and PlaqueImmatriculation.
     *
     * @return void
     */
    public function test_seeders()
    {
        // Insérer des données en utilisant les seeders
        $this->seed();

        // Vérifier si un élève avec des plaques d'immatriculation associées a été inséré
        $eleve = Eleve::first();
        $this->assertNotNull($eleve);

        // Vérifier si des plaques d'immatriculation ont été associées à l'élève
        $plaques = PlaqueImmatriculation::where('eleve_id', $eleve->id)->get();
        $this->assertNotEmpty($plaques);
    }
}
