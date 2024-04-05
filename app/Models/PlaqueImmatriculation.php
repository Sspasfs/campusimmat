<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaqueImmatriculation extends Model
{
    use HasFactory;

    /**
     * Les attributs de masse assignable.
     *
     * @var array
     */
    protected $fillable = ['numero', 'eleve_id'];

    /**
     * Obtient l'élève associé à cette plaque d'immatriculation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }
}
