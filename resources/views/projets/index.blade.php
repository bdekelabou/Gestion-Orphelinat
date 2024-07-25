@extends('layouts.admin')

@section('content')

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
</style>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title"><a href="{{ route('projets.create') }}" class="btn btn-primary">Ajouter un Projet</a></h4>
                   

                    @if(session('success'))
                        <div class="alert alert-success mb-0 ms-3" style="background-color: #28a745; color: white;">
                            {{session('success')}}
                        </div>
                    @endif
                </div>
                </br>
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 150px;">Titre</th>
                                <th style="width: 350px;">Description</th>
                                <th style="width: 350px;">Image</th>
                                <th style="width: 100px;">Budget</th>
                                <th style="width: 100px;">Date de realisation projet</th>
                                <th style="width: 100px;">Statut</th>
                                <th style="width: 200px;">Publication</th>
                                <th style="width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projets as $projet)
                            <tr>
                                <td>{{ $projet->id }}</td>
                                <td>{{ $projet->nom }}</td>
                                <td>{{ $projet->description }}</td>
                                <td>
                                    @if ($projet->image)
                                        <img src="{{ asset('storage/' . $projet->image) }}" alt="{{ $projet->nom }}" class="img-thumbnail" style="max-width: 100px;">
                                    @endif
                                </td>
                                <td>{{ $projet->Budget }}$</td>
                                <td>{{ $projet->date_debut }}</td>
                                <td>{{ $projet->statut ? 'Actif' : 'Inactif' }}</td>
                                <td style="white-space: nowrap;">                                    
                                    <form action="{{ route('projets.publishItem', $projet->id) }}" method="POST" style="display:inline-block;">
                                        @csrf

                                        <button type="submit" class="btn btn-primary">publier</button>
                                    </form>
                                    <form action="{{ route('projets.unpublishItem', $projet->id) }}" method="POST" style="display:inline-block;">
                                        @csrf

                                        <button type="submit" class="btn btn-secondary">Depublier</button>
                                    </form>
                                </td>
                                <td style="white-space: nowrap;">
                                    <a href="{{ route('projets.editer', $projet->id) }}" class="btn btn-warning">Éditer</a>
                                    <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
</div>
@endsection
