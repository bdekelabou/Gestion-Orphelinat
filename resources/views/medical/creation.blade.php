@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Ajouter un Enfant</h4>
                    <form method="POST" action="{{ route('medical.store') }}">
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
                            <label>{{ __('Genre') }}</label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre_homme" value="homme" {{ old('genre') == 'homme' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="genre_homme">
                                        {{ __('Homme') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre_femme" value="femme" {{ old('genre') == 'femme' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="genre_femme">
                                        {{ __('Femme') }}
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="genre" id="genre_autre" value="autre" {{ old('genre') == 'autre' ? 'checked' : '' }}>
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
                            <input id="date_naissance" class="form-control" type="date" name="date_naissance" value="{{ old('date_naissance') }}" required />
                            @error('date_naissance')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Situation Médicale -->
                        <div class="form-group">
                            <label for="situationMedicale">{{ __('Situation Médicale') }}</label>
                            <select id="situationMedicale" class="form-control" name="situationMedicale">
                                <option value="" disabled selected>-- Sélectionner --</option>
                                <option value="En bonne santé" {{ old('situationMedicale') == 'En bonne santé' ? 'selected' : '' }}>En bonne santé</option>
                                <option value="Souffrant" {{ old('situationMedicale') == 'Souffrant' ? 'selected' : '' }}>Souffrant</option>
                                <option value="Dépressif" {{ old('situationMedicale') == 'Dépressif' ? 'selected' : '' }}>Dépressif</option>
                            </select>
                            @error('situationMedicale')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Situation Scolaire -->
                        <div class="form-group">
                            <label for="situationScolaire">{{ __('Situation Scolaire') }}</label>
                            <select id="situationScolaire" class="form-control" name="situationScolaire">
                                <option value="" disabled selected>-- Sélectionner --</option>
                                <option value="Scolarisé" {{ old('situationScolaire') == 'Scolarisé' ? 'selected' : '' }}>Scolarisé</option>
                                <option value="Non scolarisé" {{ old('situationScolaire') == 'Non scolarisé' ? 'selected' : '' }}>Non scolarisé</option>
                            </select>
                            @error('situationScolaire')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <a href="{{ route('enfants.index') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        // Initialisez Select2 pour le select simple
        $('#situationMedicale').select2();

        // Initialisez Select2 pour le select multiple
        $('#situationScolaire').select2();

        // Initialisez Typeahead pour le champ de type basic_typeahead
        var states = ['Alabama', 'Wyoming', 'America', 'Canada', 'Russia'];
        $('#nom').typeahead({
            source: states
        });

        // Initialisez Typeahead pour le champ de type bloodhound_typeahead
        var bloodhound = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: states
        });

        $('#prenom').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: bloodhound
        });
    });
</script>
@endsection
