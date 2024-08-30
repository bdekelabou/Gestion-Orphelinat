@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center"> <!-- Utilisation de justify-content-center pour centrer horizontalement -->
        <div class="col-md-6 col-lg-4">
            <h1 class="text-center mb-4">Ajouter un Enfant</h1>
            <form method="POST" action="{{ route('enfants.store') }}">
                @csrf

                <!-- Nom -->
                <div class="form-group">
                    <label for="nom">{{ __('Nom') }}</label>
                    <input id="nom" class="form-control" type="text" name="nom" value="{{ old('nom') }}" required autofocus />
                    @error('nom')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Prénom -->
                <div class="form-group">
                    <label for="prenom">{{ __('Prénom') }}</label>
                    <input id="prenom" class="form-control" type="text" name="prenom" value="{{ old('prenom') }}" required />
                    @error('prenom')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Genre -->
                <div class="form-group">
                    <label>{{ __('Sexe') }}</label>
                    <div class="d-flex">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="genre_homme" value="homme" {{ old('genre') == 'homme' ? 'checked' : '' }}>
                            <label class="form-check-label" for="genre_homme">
                                {{ __('Garcon') }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genre" id="genre_femme" value="femme" {{ old('genre') == 'femme' ? 'checked' : '' }}>
                            <label class="form-check-label" for="genre_femme">
                                {{ __('Fille') }}
                            </label>
                        </div>
                    </div>
                    @error('Sexe')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date de Naissance -->
                <div class="form-group">
                    <label for="date_naissance">{{ __('Date de Naissance') }}</label>
                    <input id="date_naissance" class="form-control" type="date" name="date_naissance" value="{{ old('date_naissance') }}" required />
                    @error('date_naissance')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mt-4 text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Ajouter') }}
                    </button>
                    &nbsp;&nbsp;
                    <a href="{{ route('enfants.index') }}" class="btn btn-secondary">
                        {{ __('Annuler') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
