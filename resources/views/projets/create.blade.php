@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center"> <!-- Utilisation de justify-content-center pour centrer horizontalement -->
        <div class="col-md-6 col-lg-4">
            <h1 class="text-center mb-4">Ajouter un Projet</h1>
            <form method="POST" action="{{ route('projets.store') }}">
                @csrf

                <!-- Nom -->
                <div class="form-group">
                    <label for="nom">{{ __('Titre') }}</label>
                    <input id="nom" class="form-control" type="text" name="nom" value="{{ old('nom') }}" required autofocus />
                    @error('Titre')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-group">
                    <label for="description">{{ __('Description') }}</label>
                    <input id="description" class="form-control" type="text" name="description" value="{{ old('description') }}" required />
                    @error('description')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Budget -->
                <div class="form-group">
                    <label for="budget">{{ __('Budget') }}</label>
                    <input id="budget" class="form-control" type="number" name="budget" value="{{ old('budget') }}" required />
                    @error('budget')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date de Début -->
                <div class="form-group">
                    <label for="date_debut">{{ __('Date de début du projet ') }}</label>
                    <input id="date_debut" class="form-control" type="date" name="date_debut" value="{{ old('date_debut') }}" required />
                    @error('date_debut_du_projet')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Statut -->
                <div class="form-group">
                    <label for="statut">{{ __('Statut') }}</label>
                    <input id="statut" class="form-control" type="text" name="statut" value="{{ old('statut') }}" required />
                    @error('statut')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-4 text-center">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{ route('projets.index') }}" class="btn btn-secondary">Retour</a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
