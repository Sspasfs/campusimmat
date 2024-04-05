@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un élève</h1>
        <!-- Formulaire pour ajouter un nouvel élève -->
        <form action="{{ route('eleves.store') }}" method="POST">
            @csrf
            <!-- Champ pour le nom de l'élève -->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <!-- Champ pour le prénom de l'élève -->
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" required>
            </div>
            <!-- Sélection de l'école de l'élève -->
            <div class="form-group">
                <label for="ecole">École</label>
                <select name="ecole" id="ecole" class="form-control" required>
                    <option value="">Sélectionnez une école</option>
                    <option value="AFTEC">AFTEC</option>
                    <option value="MyDigitalSchool">MyDigitalSchool</option>
                    <option value="IPAC Bachelor Factory">IPAC Bachelor Factory</option>
                    <option value="Studio M">Studio M</option>
                    <option value="MBWAY">MBWAY</option>
                    <option value="WIN">WIN Sport School</option>
                    <option value="IHECF">IHECF</option>
                </select>
            </div>
            <!-- Bouton pour soumettre le formulaire -->
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
