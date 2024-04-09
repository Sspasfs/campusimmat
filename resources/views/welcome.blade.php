@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Titre principal -->
        <h1 style="text-align: center;">Bienvenue sur CampusImmat</h1>
        <!-- Deux cartes pour la gestion des élèves et des plaques -->
        <div class="row" style="justify-content: center;">
            <div class="col-md-6">
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
            <div class="col-md-6">
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
        <!-- Carte pour accéder à GLPI -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center;">Faire une réclamation via GLPI</h5>
                        <p class="card-text" style="text-align: center;">Accédez à notre système de gestion de tickets pour faire une réclamation.</p>
                        <a href="http://87.98.128.37:85/index.php" class="btn btn-secondary btn-block" target="_blank">Accéder à GLPI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
