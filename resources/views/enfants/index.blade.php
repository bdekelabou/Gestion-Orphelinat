@extends('layouts.admin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    .truncated-description {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Limite le nombre de lignes */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 4.5em; /* Ajuster la hauteur en fonction du nombre de lignes */
    margin-bottom: 0;
}

/* Conteneur des boutons de pagination */
.nav-buttons {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin: 1rem 0; /* Ajoute un espace autour des boutons */
}

/* Style des boutons de pagination */
.nav-buttons .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    border: 1px solid #333; /* Bordure de couleur sombre */
    background-color: #000; /* Fond noir */
    color: #fff; /* Texte blanc */
    cursor: pointer;
    transition: background-color 0.2s ease;
}

/* Style du bouton lorsque l'on passe la souris dessus */
.nav-buttons .btn:hover {
    background-color: #333; /* Fond noir plus clair */
}

/* Style du bouton lorsqu'il est désactivé */
.nav-buttons .btn:disabled {
    background-color: #666; /* Fond gris pour les boutons désactivés */
    cursor: not-allowed;
}

/* Style pour les flèches */
.arrow-left, .arrow-right {
    width: 1rem;
    height: 1rem;
    fill: #fff; /* Couleur des flèches en blanc */
}
.table-actions {
        white-space: nowrap;
    }

    .table-actions .btn {
        margin-right: 5px;
    }

</style>

@section('content')
    <div class="container">
        <h1>Liste des Enfants</h1>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title"><a href="{{ route('enfants.create') }}" class="btn btn-primary">Ajouter un Enfant</a></h4>
                       
    
                        @if(session('success'))
                            <div class="alert alert-success mb-0 ms-3" style="background-color: #28a745; color: white;">
                                {{session('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Genre</th>
                                <th>Date de Naissance</th>
                                <th>Situation Médicale</th>
                                <th>Situation Scolaire</th>
                                <th style="width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enfants as $enfant)
                                <tr>
                                    <td>{{ $enfant->id }}</td>
                                    <td>{{ $enfant->user->nom }}</td>
                                    <td>{{ $enfant->user->prenom }}</td>
                                    <td>{{ $enfant->user->genre }}</td>
                                    <td>{{ $enfant->date_naissance }}</td>
                                    <td>
                                        <a href="{{ route('medical.show', $enfant->id) }}" class="btn btn-warning"><i class="fas fa-eye fa-sm"></i></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('scolaire.show', $enfant->id) }}" class="btn btn-warning"><i class="fas fa-eye fa-sm"></i></a>
                                    </td>
                                    <td class="table-actions">
                                        <a href="{{ route('enfants.edit', $enfant->id) }}" class="btn btn-warning"><i class="fas fa-edit fa-sm"></i></a>
                                        <form action="{{ route('enfants.destroy', $enfant->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-sm"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
