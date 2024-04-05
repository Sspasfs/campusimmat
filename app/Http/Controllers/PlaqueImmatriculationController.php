<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlaqueImmatriculationRequest;
use App\Http\Requests\UpdatePlaqueImmatriculationRequest;
use App\Models\PlaqueImmatriculation;
use App\Models\Eleve;
use Illuminate\Http\Request;

class PlaqueImmatriculationController extends Controller
{
    /**
     * Affiche la liste des plaques d'immatriculation.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $plaques = PlaqueImmatriculation::all();
        return view('plaques.index', compact('plaques'));
    }

    /**
     * Affiche le formulaire de création d'une plaque d'immatriculation.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $eleves = Eleve::all();
        return view('plaques.create', compact('eleves'));
    }

    /**
     * Enregistre une nouvelle plaque d'immatriculation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required',
            'eleve_id' => 'required|exists:eleves,id'
        ]);

        PlaqueImmatriculation::create($request->all());

        return redirect()->route('plaques.index');
    }

    /**
     * Affiche les détails d'une plaque d'immatriculation.
     *
     * @param  \App\Models\PlaqueImmatriculation  $plaque
     * @return \Illuminate\View\View
     */
    public function show(PlaqueImmatriculation $plaque)
    {
        return view('plaques.show', compact('plaque'));
    }

    /**
     * Affiche le formulaire de modification d'une plaque d'immatriculation.
     *
     * @param  \App\Models\PlaqueImmatriculation  $plaque
     * @return \Illuminate\View\View
     */
    public function edit(PlaqueImmatriculation $plaque)
    {
        $eleves = Eleve::all();
        return view('plaques.edit', compact('plaque', 'eleves'));
    }

    /**
     * Met à jour les informations d'une plaque d'immatriculation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlaqueImmatriculation  $plaque
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, PlaqueImmatriculation $plaque)
    {
        $request->validate([
            'numero' => 'required',
            'eleve_id' => 'required|exists:eleves,id'
        ]);

        $plaque->update($request->all());

        return redirect()->route('plaques.index');
    }

    /**
     * Supprime une plaque d'immatriculation.
     *
     * @param  \App\Models\PlaqueImmatriculation  $plaque
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(PlaqueImmatriculation $plaque)
    {
        $plaque->delete();

        return redirect()->route('plaques.index');
    }
}
