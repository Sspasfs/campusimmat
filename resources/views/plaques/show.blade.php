@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de la plaque d'immatriculation</h1>
        <!-- Affichage du numéro de la plaque -->
        <p><strong>Numéro :</strong> {{ $plaque->numero }}</p>
        <!-- Affichage du nom et prénom de l'élève associé à la plaque -->
        <p><strong>Élève associé :</strong> {{ $plaque->eleve->nom }} {{ $plaque->eleve->prenom }}</p>
        <!-- Bouton pour retourner à la liste des plaques -->
        <a href="{{ route('plaques.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
@endsection
