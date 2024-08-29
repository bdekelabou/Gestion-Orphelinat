@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Liste des evenements</h1>
        <a href="{{ route('evenements.create') }}" class="btn btn-primary">Ajouter un evenememt</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date</th>
                    <th>Actions</th>
                    <th>Publication</th> <!-- Ajouté -->
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->id }}</td>
                        <td>{{ $evenement->titre }}</td>
                        <td>{{ $evenement->description }}</td>
                        <td>
                            <img src="{{ Vite::asset('storage/app/public/'.$evenement->image) }}" width="100">
                        </td>
                        <td>{{ $evenement->date }}</td>
                        <td>
                            <a href="{{ route('evenements.update', $evenement->id) }}" class="btn btn-warning">Update</a> &nbsp;&nbsp;
                            <a href="{{ route('evenements.delete', $evenement->id) }}" class="btn btn-danger">Delete</a> &nbsp;&nbsp;
                        </td>
                        <td>
                            @if ($evenement->is_published)
                                <a href="{{ route('evenements.depublier', $evenement->id) }}" class="btn btn-secondary">Dépublier</a>
                            @else
                                <a href="{{ route('evenements.publier', $evenement->id) }}" class="btn btn-success">Publier</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('evenements.publie') }}" class="btn btn-success">Voir les evenements à l'accueil</a>
    </div>
@endsection
