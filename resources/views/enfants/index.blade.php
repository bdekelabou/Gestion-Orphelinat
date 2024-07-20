@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Liste des Enfants</h1>
        <a href="{{ route('enfants.create') }}" class="btn btn-primary">Ajouter un Enfant</a>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Hoverable Table</div>
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
                                <th>Actions</th>
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
                                    <td>{{ $enfant->situationMedicale }}</td>
                                    <td>{{ $enfant->situationScolaire }}</td>
                                    <td>
                                        {{-- <a href="{{ route('enfants.show', $enfant->id) }}" class="btn btn-info">Voir</a> --}}
                                        <a href="{{ route('enfants.edit', $enfant->id) }}" class="btn btn-warning">Éditer</a> &nbsp;&nbsp;
                                        <form action="{{ route('enfants.destroy', $enfant->id) }}" method="POST" style="display:inline-block;">
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
@endsection
