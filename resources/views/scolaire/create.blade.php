@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">{{ 'Ajouter une Situation Scolaire' }}</h4>
                    <form method="POST" action="{{ route('scolaire.store') }}">
                        @csrf

                        <!-- Sélectionner un Enfant -->
                        <div class="form-group">
                            <label for="enfant_id">Sélectionner un Enfant</label>
                            <select name="enfant_id" id="enfant_id" class="form-control">
                                <option value="">Choisissez un enfant</option>
                                @foreach ($enfantsList as $enfant)
                                    <option value="{{ $enfant->id }}">
                                        {{ $enfant->user->nom }}
                                    </option>
                                @endforeach
                            </select>
                            @error('enfant_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Niveau -->
                        <div class="form-group">
                            <label for="niveau">Niveau</label>
                            <select name="niveau" id="niveau" class="form-control">
                                <option value="">Sélectionnez un niveau</option>
                                @foreach ($niveaux as $niveau)
                                    <option value="{{ $niveau }}">{{ $niveau }}</option>
                                @endforeach
                            </select>
                            @error('niveau')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Établissement -->
                        <div class="form-group">
                            <label for="etablissement">Établissement</label>
                            <input type="text" name="etablissement" id="etablissement" class="form-control" value="{{ old('etablissement') }}">
                            @error('etablissement')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Classe d'Arrivée -->
                        <div class="form-group">
                            <label for="classe_arrivee">Classe d'Arrivée</label>
                            <select name="classe_arrivee" id="classe_arrivee" class="form-control">
                                <option value="">Sélectionnez une classe</option>
                                @foreach ($classes as $classe)
                                    <option value="{{ $classe }}">{{ $classe }}</option>
                                @endforeach
                            </select>
                            @error('classe_arrivee')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Classe Actuelle -->
                        <div class="form-group">
                            <label for="classe_actuelle">Classe Actuelle</label>
                            <select name="classe_actuelle" id="classe_actuelle" class="form-control">
                                <option value="">Sélectionnez une classe</option>
                                @foreach ($classes as $classe)
                                    <option value="{{ $classe }}">{{ $classe }}</option>
                                @endforeach
                            </select>
                            @error('classe_actuelle')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Redoublement -->
                        <div class="form-group">
                            <label for="redoublement">Redoublement</label>
                            <select name="redoublement" id="redoublement" class="form-control">
                                <option value="0">Non</option>
                                <option value="1">Oui</option>
                            </select>
                            @error('redoublement')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">{{ 'Ajouter' }}</button>
                            <a href="{{ route('scolaire.index') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
