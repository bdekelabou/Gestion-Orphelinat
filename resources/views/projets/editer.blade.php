@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="w-50">
            <h1 class="text-center mb-4">Editer un Projet</h1>
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
                    <label for="date_debut">{{ __('Date de Début') }}</label>
                    <input id="date_debut" class="form-control w-100" type="date" name="date_debut" value="{{ $projet->date_debut }}" required />
                    @error('date_debut')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date de Fin -->
                <div class="form-group mb-4">
                    <label for="date_fin">{{ __('Date de Fin') }}</label>
                    <input id="date_fin" class="form-control w-100" type="date" name="date_fin" value="{{ $projet->date_fin }}" required />
                    @error('date_fin')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!--budget-->
                <div class="form-group mb-4">
                    <label for="budget">{{ __('Budget') }}</label>
                    <input id="budget" class="form-control w-100" type="number" name="budget" value="{{ $projet->budget }}" required />
                    @error('budget')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                
                <!-- Statut -->

               

                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Mise à jour ') }}
                    </button>
                    &nbsp;&nbsp;
                    <a href="{{ route('projets.index') }}" class="btn btn-secondary w-100">
                        {{ __('Annuler') }}
                </div>

            </form>
        </div>
    </div>
@endsection