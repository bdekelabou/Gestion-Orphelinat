@extends('layouts.admin')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="w-50">
        <h1 class="text-center mb-4">Éditer un Enfant</h1>
        <form method="POST" action="{{ route('enfants.update', $enfant->id) }}">
            @csrf
            @method('PUT')

            <!-- Nom -->
            <div class="form-group">
                <label for="nom">{{ __('Nom') }}</label>
                <input id="nom" class="form-control w-100" type="text" name="nom" value="{{ $enfant->user->nom }}" required autofocus />
                @error('nom')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Prénom -->
            <div class="form-group">
                <label for="prenom">{{ __('Prénom') }}</label>
                <input id="prenom" class="form-control w-100" type="text" name="prenom" value="{{ $enfant->user->prenom }}" required />
                @error('prenom')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Genre -->
            <div class="form-group">
                <label>{{ __('Genre') }}</label>
                <div class="d-flex align-items-center">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="genre" id="genre_homme" value="homme" {{ $enfant->user->genre == 'homme' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genre_homme">
                            {{ __('Homme') }}
                        </label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="genre" id="genre_femme" value="femme" {{ $enfant->user->genre == 'femme' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genre_femme">
                            {{ __('Femme') }}
                        </label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="radio" name="genre" id="genre_autre" value="autre" {{ $enfant->user->genre == 'autre' ? 'checked' : '' }}>
                        <label class="form-check-label" for="genre_autre">
                            {{ __('Autre') }}
                        </label>
                    </div>
                </div>
                @error('genre')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date de Naissance -->
            <div class="form-group">
                <label for="date_naissance">{{ __('Date de Naissance') }}</label>
                <input id="date_naissance" class="form-control w-100" type="date" name="date_naissance" value="{{ $enfant->date_naissance }}" required />
                @error('date_naissance')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-4 text-center">
                <button type="submit" class="btn btn-primary">{{ __('Mettre à jour') }}</button>
                <a href="{{ route('enfants.index') }}" class="btn btn-secondary">{{ __('Annuler') }}</a>
            </div>
        </form>
    </div>
</div>
@endsection
