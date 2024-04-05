<?

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\PlaqueImmatriculation;
use Database\Factories\PlaqueImmatriculationFactory;

class PlaqueImmatriculationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test de la création d'une plaque d'immatriculation à partir de la factory.
     *
     * @return void
     */
    public function testCreationPlaqueImmatriculationFactory()
    {
        // Crée une plaque d'immatriculation en utilisant la factory
        $plaque = PlaqueImmatriculation::factory()->create();

        // Vérifie que la plaque d'immatriculation a été ajoutée à la base de données
        $this->assertDatabaseHas('plaque_immatriculations', $plaque->toArray());
    }

    // Ajoutez d'autres méthodes de test pour les autres fonctionnalités si nécessaire
}
