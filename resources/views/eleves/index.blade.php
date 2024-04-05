@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des élèves</h1>
        <!-- Barre de recherche -->
        <input type="text" id="searchInput" placeholder="Rechercher un élève..." class="form-control mb-3">
        <a href="{{ route('eleves.create') }}" class="btn btn-primary mb-3">Ajouter un élève</a>
        <!-- Tableau des élèves -->
        <table id="elevesTable" class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>École</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Boucle pour afficher chaque élève -->
                @foreach ($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->ecole }}</td>
                        <td>
                            <!-- Boutons pour voir, modifier et supprimer un élève -->
                            <a href="{{ route('eleves.show', $eleve) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('eleves.edit', $eleve) }}" class="btn btn-primary btn-sm">Modifier</a>
                            <form action="{{ route('eleves.destroy', $eleve) }}" method="POST" style="display: inline;">
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
        // Fonction pour filtrer les élèves
        function filterEleves() {
            var input, filter, table, tr, td, i, j, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("elevesTable");
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
        document.getElementById("searchInput").addEventListener("keyup", filterEleves);
    </script>
@endsection
