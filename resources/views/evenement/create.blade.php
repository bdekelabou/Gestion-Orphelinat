@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="w-50">
            <h1 class="text-center mb-4">Ajouter un Evenement</h1>
            <form method="POST" action="{{ route('evenements.evenement_traitement') }}">
                @csrf

                <!-- titre -->
                <div class="form-group">
                    <label for="titre">{{ __('Titre') }}</label>
                    <input id="titre" class="form-control w-100" type="text" name="titre" value="{{ old('titre') }}" required autofocus />
                    @error('titre')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- description -->
                <div class="form-group">
                    <label for="description">{{ __('Description') }}</label>
                    <input id="description" class="form-control w-100" type="text" name="description" value="{{ old('description') }}" required />
                    @error('description')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Date -->
                <div class="form-group">
                    <label for="date">{{ __('Date') }}</label>
                    <input id="date" class="form-control w-100" type="date" name="date" value="{{ old('date') }}" required />
                    @error('date')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group mt-4 text-center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Ajouter') }}
                    </button>
                    &nbsp;&nbsp;
                    <a href="{{ route('evenements.liste') }}" class="btn btn-secondary">
                        {{ __('Annuler') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
