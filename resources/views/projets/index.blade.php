@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><a href="{{ route('projets.create') }}" class="btn btn-primary">Ajouter un Projet</a></h4>
                </br>
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 50px;">ID</th>
                                <th style="width: 150px;">Nom</th>
                                <th style="width: 300px;">Description</th>
                                <th style="width: 100px;">Budget</th>
                                <th style="width: 150px;">Date de realisation projet</th>
                                <th style="width: 100px;">Statut</th>
                                <th style="width: 200px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projets as $projet)
                            <tr>
                                <td>{{ $projet->id }}</td>
                                <td>{{ $projet->nom }}</td>
                                <td>{{ $projet->description }}</td>
                                <td>{{ $projet->Budget }}</td>
                                <td>{{ $projet->date_debut }}</td>
                                <td>{{ $projet->statut ? 'Actif' : 'Inactif' }}</td>
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
