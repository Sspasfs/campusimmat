@extends('layouts.app')


@section('content')
    <div class="container">
        <!-- Titre principal -->
        <h1 style="text-align: center;">Bienvenue sur CampusImmat</h1>
        <!-- Deux cartes pour la gestion des élèves et des plaques -->
        <div class="row" style="justify-content: center;">
            <div class="col-md-4">
                <!-- Carte pour la gestion des élèves -->
                <div class="card" style="margin-top: 50px;">
                    <div class="card-body" style="text-align: center;">
                        <!-- Titre de la carte -->
                        <h5 class="card-title">Gestion des élèves</h5>
                        <!-- Description de la carte -->
                        <p class="card-text">Gérez les informations des élèves de votre établissement.</p>
                        <!-- Bouton pour accéder à la liste des élèves -->
                        <a href="{{ route('eleves.index') }}" class="btn btn-primary">Accéder aux élèves</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Carte pour la gestion des plaques d'immatriculation -->
                <div class="card" style="margin-top: 50px;">
                    <div class="card-body" style="text-align: center;">
                        <!-- Titre de la carte -->
                        <h5 class="card-title">Gestion des plaques d'immatriculation</h5>
                        <!-- Description de la carte -->
                        <p class="card-text">Gérez les plaques d'immatriculation associées aux élèves.</p>
                        <!-- Bouton pour accéder à la liste des plaques -->
                        <a href="{{ route('plaques.index') }}" class="btn btn-primary">Accéder aux plaques</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
