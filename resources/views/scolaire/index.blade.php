@extends('layouts.admin')

@section('content')

<style>
    .table-actions {
        white-space: nowrap;
    }

    .table-actions .btn {
        margin-right: 5px;
    }
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
</style>

@section('content')

    <div class="container">
        <h1>Bilans educatifs</h1>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="card-title"> <a href="{{ route('scolaire.create') }}" class="btn btn-primary">Créer un scolaire</a></h4>
                        @if(session('success'))
                            <div class="alert alert-success mb-0 ms-3" style="background-color: #28a745; color: white;">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>   </br>

                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Id</th>
                                <th style="width: 150px;">Enfant</th>
                                <th style="width: 150px;">Niveau</th>
                                <th style="width: 150px;">Etablissement</th>
                                <th style="width: 150px;">Classe arrivée</th>
                                <th style="width: 150px;">Classe actuelle</th>
                                <th style="width: 150px;">Déjà redoublé</th>
                                <th style="width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($scolaire as $scolaire)
                                <tr>
                                    <td>{{ $scolaire->id }}</td>
                                    <td>{{ $scolaire->enfant->user->nom }} {{ $scolaire->enfant->prenom }}</td>
                                    <td>{{ $scolaire->niveau }}</td>
                                    <td>{{ $scolaire->etablissement }}</td>
                                    <td>{{ $scolaire->classe_arrivee }}</td>
                                    <td>{{ $scolaire->classe_actuelle }}</td>
                                    <td>{{ $scolaire->redoublement  ? 'Oui':'Non'}}</td>
                                    <td class="table-actions">
                                        <a href="{{ route('scolaire.edit', $scolaire->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('scolaire.destroy', $scolaire->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- Pagination, if needed --}}
                {{-- <div class="pagination mt-4">
                    @include('pagination.customPaginate', ['items' => $scolaires])
                </div> --}}
            </div>
        </div>
    </div>

@endsection