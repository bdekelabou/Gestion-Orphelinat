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
                     <th>Statut</th>
                    <th>Actions</th>
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
                            {{-- <a href="{{ route('evenements.show', $evenement->id) }}" class="btn btn-info">Voir</a> --}}
                            <a href="{{ route('evenements.update', $evenement->id) }}" class="btn btn-warning">Éditer</a> &nbsp;&nbsp;
                            <a href="{{ route('evenements.delete', $evenement->id) }}" class="btn btn-danger">Supprimer</a> &nbsp;&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('publication') }}" class="btn btn-success">Voir les evenements à l'accueil</a>
    </div>
@endsection
