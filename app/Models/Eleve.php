<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    /**
     * Les attributs de masse assignable.
     *
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'ecole'];

    /**
     * Obtient les plaques d'immatriculation associées à cet élève.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plaques()
    {
        return $this->hasMany(PlaqueImmatriculation::class);
    }
}
