@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter une plaque d'immatriculation</h1>
        <!-- Formulaire d'ajout d'une plaque d'immatriculation -->
        <form action="{{ route('plaques.store') }}" method="POST">
            @csrf
            <!-- Champ pour saisir le numéro de plaque -->
            <div class="form-group">
                <label for="numero">Numéro de plaque</label>
                <input type="text" name="numero" id="numero" class="form-control" required>
            </div>
            <!-- Sélection de l'élève associé à la plaque -->
            <div class="form-group">
                <label for="eleve_id">Élève associé</label>
                <select name="eleve_id" id="eleve_id" class="form-control" required>
                    <option value="">Sélectionnez un élève</option>
                    <!-- Boucle pour afficher la liste des élèves -->
                    @foreach ($eleves as $eleve)
                        <option value="{{ $eleve->id }}">{{ $eleve->nom }} {{ $eleve->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Bouton de soumission du formulaire -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
