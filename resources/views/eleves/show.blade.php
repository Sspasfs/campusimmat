@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de l'élève</h1>
        <!-- Affichage des détails de l'élève -->
        <p><strong>Nom :</strong> {{ $eleve->nom }}</p>
        <p><strong>Prénom :</strong> {{ $eleve->prenom }}</p>
        <p><strong>Ecole :</strong> {{ $eleve->ecole }}</p>
        <!-- Bouton pour retourner à la liste des élèves -->
        <a href="{{ route('eleves.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
@endsection
