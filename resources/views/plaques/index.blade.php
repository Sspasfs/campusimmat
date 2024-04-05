@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des plaques d'immatriculation</h1>
        <!-- Barre de recherche -->
        <input type="text" id="searchInput" placeholder="Rechercher une plaque..." class="form-control mb-3">
        <a href="{{ route('plaques.create') }}" class="btn btn-primary mb-3">Ajouter une plaque</a>
        <!-- Tableau des plaques d'immatriculation -->
        <table id="plaquesTable" class="table">
            <thead>
                <tr>
                    <th>Numéro de plaque</th>
                    <th>Élève</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plaques as $plaque)
                    <tr>
                        <!-- Affichage du numéro de plaque -->
                        <td>{{ $plaque->numero }}</td>
                        <!-- Affichage du nom et du prénom de l'élève associé à la plaque -->
                        <td>{{ $plaque->eleve->nom }} {{ $plaque->eleve->prenom }}</td>
                        <td>
                            <!-- Boutons pour voir, modifier et supprimer une plaque -->
                            <a href="{{ route('plaques.show', $plaque) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('plaques.edit', $plaque) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('plaques.destroy', $plaque) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Fonction pour filtrer les plaques d'immatriculation
        function filterPlaques() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("plaquesTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                if (i === 0) continue; // Ignorer la première ligne (en-têtes de colonne)
                tr[i].style.display = "none"; // Masquer toutes les lignes par défaut
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = ""; // Afficher la ligne si une correspondance est trouvée dans n'importe quelle colonne
                            break; // Sortir de la boucle interne si une correspondance est trouvée
                        }
                    }
                }
            }
        }
    
        // Ajouter un écouteur d'événements pour déclencher le filtrage lors de la saisie dans la barre de recherche
        document.getElementById("searchInput").addEventListener("keyup", filterPlaques);
    </script>
@endsection
