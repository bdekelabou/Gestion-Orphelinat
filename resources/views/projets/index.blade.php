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
                                    @if($projet->statut)                                                              
                                    <form action="{{ route('projets.unpublishItem', $projet->id) }}" method="POST" style="display:inline-block;">
                                        @csrf

                                        <button type="submit" class="btn btn-secondary">Depublier</button>
                                    </form>
                                    
                                        @else
                                        <form action="{{ route('projets.publishItem', $projet->id) }}" method="POST" style="display:inline-block;">
                                            @csrf

                                            <button type="submit" class="btn btn-primary">publier</button>
                                        </form>
                                    @endif
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

                <div class="pagination mt-4">
                    {{-- {{ ($projets->links('pagination.customPaginate')) }} --}}
                    @include('pagination.customPaginate', ['projets' => $projets])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
