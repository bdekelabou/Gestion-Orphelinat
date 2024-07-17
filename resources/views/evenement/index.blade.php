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
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->id }}</td>
                        <td>{{ $evenement->titre }}</td>
                        <td>{{ $evenement->description }}</td>
                        <td>{{ $evenement->date }}</td>
                        <td>
                            {{-- <a href="{{ route('evenements.show', $evenement->id) }}" class="btn btn-info">Voir</a> --}}
                            <a href="{{ route('evenements.update', $evenement->id) }}" class="btn btn-warning">Éditer</a> &nbsp;&nbsp;
                            <a href="{{ route('evenements.delete', $evenement->id) }}" class="btn btn-danger">Delete</a> &nbsp;&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection