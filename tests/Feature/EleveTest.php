<? 

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Eleve;
use Database\Factories\EleveFactory;

class EleveTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test de la création d'un élève à partir de la factory.
     *
     * @return void
     */
    public function testCreationEleveFactory()
    {
        // Crée un élève en utilisant la factory
        $eleve = Eleve::factory()->create();

        // Vérifie que l'élève a été ajouté à la base de données
        $this->assertDatabaseHas('eleves', $eleve->toArray());
    }

    // Ajoutez d'autres méthodes de test pour les autres fonctionnalités si nécessaire
}
