@extends('layouts.admin')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="w-50">
        <h1 class="text-center mb-4">Ajouter un Projet</h1>
        <form method="POST" action="{{ route('projets.store') }}">
            @csrf

            <!-- Nom -->
            <div class="form-group">
                <label for="nom">{{ __('Nom') }}</label>
                <input id="nom" class="form-control w-100" type="text" name="nom" value="{{ old('nom') }}" required autofocus />
                @error('nom')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <input id="description" class="form-control w-100" type="text" name="description" value="{{ old('description') }}" required />
                @error('description')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Budget -->
            <div class="form-group">
                <label for="budget">{{ __('Budget') }}</label>
                <input id="budget" class="form-control w-100" type="number" name="budget" value="{{ old('budget') }}" required />
                @error('budget')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date de Début -->

            <div class="form-group">
                <label for="date_debut">{{ __('Date de Début') }}</label>
                <input id="date_debut" class="form-control w-100" type="date" name="date_debut" value="{{ old('date_debut') }}" required />
                @error('date_debut')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date de Fin -->
            <div class="form-group">
                <label for="date_fin">{{ __('Date de Fin') }}</label>
                <input id="date_fin" class="form-control w-100" type="date" name="date_fin" value="{{ old('date_fin') }}" required />
                @error('date_fin')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Statut -->
            <div class="form-group">
                <label for="statut">{{ __('Statut') }}</label>
                <input id="statut" class="form-control w-100" type="text" name="statut" value="{{ old('statut') }}" required />
                @error('statut')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="{{ route('projets.index') }}" class="btn btn-secondary">Retour</a>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>



@endsection