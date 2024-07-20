@extends('layouts.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="w-50">
        <h1 class="text-center mb-4">Éditer un Projet</h1>
        <form method="POST" action="{{ route('projets.update', $projet->id) }}">
            @csrf
            @method('PUT')

            <!-- Nom -->
            <div class="form-group">
                <label for="nom">{{ __('Nom') }}</label>
                <input id="nom" class="form-control w-100" type="text" name="nom" value="{{ $projet->nom }}" required autofocus />
                @error('nom')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">{{ __('Description') }}</label>
                <textarea id="description" class="form-control w-100" name="description" required>{{ $projet->description }}</textarea>
                @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date de Début -->
            <div class="form-group mb-4">
                <label for="date_debut">{{ __('Date de début du projet') }}</label>
                <input id="date_debut" class="form-control w-100" type="date" name="date_debut" value="{{ $projet->date_debut }}" required />
                @error('date_debut_du_projet')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Budget -->
            <div class="form-group mb-4">
                <label for="budget">{{ __('Budget') }}</label>
                <input id="budget" class="form-control w-100" type="number" name="budget" value="{{ $projet->budget }}" required />
                @error('budget')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Statut -->
            <div class="form-group mb-4">
                <label for="statut">{{ __('Statut') }}</label>
                <input id="statut" class="form-control w-100" type="text" name="statut" value="{{ $projet->statut }}" required />
                @error('statut')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-4 d-flex justify-content-between align-items-center">
                <a href="{{ route('projets.index') }}" class="btn btn-secondary">
                    {{ __('Annuler') }}
                </a>
                <button type="submit" class="btn btn-primary">
                    {{ __('Mettre à jour') }}
                </button>
            </div>

        </form>
    </div>
</div>
@endsection
