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
                <label for="date_debut">{{ __('Date de realisation projet') }}</label>
                <input id="date_debut" class="form-control w-100" type="date" name="date_debut" value="{{ $projet->date_debut }}" required />
                @error('date_debut_du_projet')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <!-- Budget -->
            <div class="form-group mb-4">
                <label for="Budget">{{ __('Budget') }}</label>
                <input id="Budget" class="form-control w-100" type="number" name="Budget" value="{{ $projet->Budget }}" required />
                @error('Budget')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

             <!-- Statut -->
            <div class="form-group">
                <label for="statut">{{ __('Statut') }}</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="actif" value="1" {{ old('statut', $projet->statut) == '1' ? 'checked' : '' }}>
                    <label class="form-check-label" for="actif">{{ __('Actif') }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="inactif" value="0" {{ old('statut', $projet->statut) == '0' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inactif">{{ __('Inactif') }}</label>
                @error('statut')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
          <!-- Image -->
          <div class="form-group">
                    <label for="image">{{ __('Image') }}</label>
                    <input type="file" class="form-control" id="image" name="image">
                    @if ($projet->image)
                        <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" style="max-width: 200px; margin-top: 10px;">
                    @endif
                    @error('image')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                 <!-- Detail -->
                 <div class="form-group">
                    <label for="detail">{{__('Detail')}}</label>
                    <textarea class="form-control" rows="8" cols="30" id="detail" name="detail">{{ old('detail', $projet->detail) }}</textarea>
                    @error('detail')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
            <div class="form-group mt-4 text-center">
                <button type="submit" class="btn btn-primary">Editer</button>
                <a href="{{ route('projets.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </form>
    </div>
</div>
@endsection
