<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use Illuminate\Http\Request;
use App\Models\Eleve;

class EleveController extends Controller
{
    /**
     * Affiche la liste des élèves.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Affiche le formulaire de création d'un élève.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('eleves.create');
    }

    /**
     * Enregistre un nouvel élève.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        Eleve::create($request->all());

        return redirect()->route('eleves.index');
    }

    /**
     * Affiche les détails d'un élève.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\View\View
     */
    public function show(Eleve $eleve)
    {
        return view('eleves.show', compact('eleve'));
    }

    /**
     * Affiche le formulaire de modification d'un élève.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\View\View
     */
    public function edit(Eleve $eleve)
    {
        return view('eleves.edit', compact('eleve'));
    }

    /**
     * Met à jour les informations d'un élève.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Eleve $eleve)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        $eleve->update($request->all());

        return redirect()->route('eleves.index');
    }

    /**
     * Supprime un élève.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Eleve $eleve)
    {
        $eleve->delete();

        return redirect()->route('eleves.index');
    }
}
