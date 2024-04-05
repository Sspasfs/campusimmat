@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'élève</h1>
        <!-- Formulaire pour modifier les informations de l'élève -->
        <form action="{{ route('eleves.update', $eleve) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Champ pour le nom de l'élève -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ $eleve->nom }}" required>
            </div>
            <!-- Champ pour le prénom de l'élève -->
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $eleve->prenom }}" required>
            </div>
            <!-- Champ pour l'école de l'élève -->
            <div class="form-group">
                <label for="ecole">École</label>
                <input type="text" name="ecole" id="ecole" class="form-control" value="{{ $eleve->ecole }}" required>
            </div>
            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
