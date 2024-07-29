@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="w-50">
            <h1 class="text-center mb-4">Éditer un evenement</h1>
            <form action="{{route('evenements.update_traitement')}}" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{ $evenements->id }}">
                    <div class="form-group">
                        <label for="Titre">Titre</label>
                        <input type="text" class="form-control" id="Titre" name="titre" value="{{ $evenements->titre }}">
                    </div>

                    <div class="form-group">
                        <label for="Description">Description</label>
                        <input type="text" class="form-control" id="Description" name="description" value="{{ $evenements->description }}">
                    </div>

                    <div class="form-group">
                        <label for="Date">Date</label>
                        <input type="date" class="form-control" id="Date" name="date" value="{{ $evenements->date }}">
                    </div>
                    <button type="submit" class="btn btn-primary">MODIFIER UN EVENEMENT</button>

                    <br> <br />
                </form>
                <a href="{{route('evenements.liste')}}" class="btn btn-danger"> Revenir à la liste des evenements</a>
        </div>
    </div>
@endsection
