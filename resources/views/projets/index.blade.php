@extends('layouts.admin')

@section('content')
    <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title"><a href="{{ route('projets.create') }}" class="btn btn-primary">Ajouter un Projet</a></h4>
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Budget</th>
                                <th>date_debut</th>
                                <th>date_fin</th>
                                <th>statut</th>
                            </tr>
                        </thead>
                            <tbody>
                                <tr>
                                    @foreach ($projets as $projet)
                                        <tr>
                                            <td>{{ $projet->id }}</td>
                                            <td>{{ $projet->nom }}</td>
                                            <td>{{ $projet->description }}</td>
                                            <td>{{ $projet->budget }}</td>
                                            <td>{{ $projet->date_debut }}</td>
                                            <td>{{ $projet->date_fin }}</td>
                                            <td>{{ $projet->statut }}</td>
                                            <td>
                                                <a href="{{ route('projets.show', $projet->id) }}" class="btn btn-info">Voir</a>
                                                <a href="{{ route('projets.edit', $projet->id) }}" class="btn btn-warning">Éditer</a> &nbsp;&nbsp;
                                                <form action="{{ route('projets.destroy', $projet->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection