@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">{{ 'Faire un bilan' }}</h4>
                    <form method="POST" action="{{ route('medical.store') }}">
                        @csrf
                        {{-- @if(isset($medical))
                            @method('PUT')
                        @endif --}}

                        <!-- Sélectionner un Enfant -->
                        <div class="form-group">
                            <label for="enfant_id">Sélectionner un Enfant</label>
                            <select name="enfant_id" id="enfant_id" class="form-control">
                                <option value="">Choisissez un enfant</option>
                                @foreach ($enfantsList as $enfant)
                                    <option value="{{ $enfant->id }}" {{ (isset($medical) && $medical->enfant_id == $enfant->id) ? 'selected' : '' }}>
                                        {{ $enfant->user->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                     <!-- Antécédents Médicaux -->
                            <div class="form-group">
                                <label for="antecedent_medicaux">Antécédents Médicaux</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="antecedent_medicaux[]" id="antecedent_medicaux" title="Antécédents Médicaux">
                                    @foreach ($antecedentMedicauxList as $antecedent_medicaux)
                                        <option value="{{ $antecedent_medicaux }}"
                                                {{ isset($medical) && (is_array(json_decode($medical->antecedent_medicaux, true))) && in_array($antecedent_medicaux, json_decode($medical->antecedent_medicaux, true)) ? 'selected' : '' }}>
                                            {{ $antecedent_medicaux }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('antecedent_medicaux')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Vaccins -->
                            <div class="form-group">
                                <label for="vaccin">Vaccins</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="vaccin[]" id="vaccin" title="Vaccin">
                                    @foreach ($vaccinsList as $vaccin)
                                        <option value="{{ $vaccin }}"
                                                {{ isset($medical) && (is_array(json_decode($medical->vaccin, true))) && in_array($vaccin, json_decode($medical->vaccin, true)) ? 'selected' : '' }}>
                                            {{ $vaccin }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('vaccin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Appareils Médicaux -->
                            <div class="form-group">
                                <label for="appareil_medicaux">Appareils Médicaux</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="appareil_medicaux[]" id="appareil_medicaux" title="Appareil Médicaux" >
                                    @foreach ($appareilsMedicauxList as $appareil_medicaux)
                                        <option value="{{ $appareil_medicaux }}"
                                                {{ isset($medical) && (is_array(json_decode($medical->appareil_medicaux, true))) && in_array($appareil_medicaux, json_decode($medical->appareil_medicaux, true)) ? 'selected' : '' }}>
                                            {{ $appareil_medicaux }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('appareil_medicaux')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Soins Spéciaux -->
                            <div class="form-group">
                                <label for="soin_speciaux">Soins Spéciaux</label>
                                <select class="selectpicker form-control" multiple data-live-search="true" name="soin_speciaux[]" id="soin_speciaux" title="Soins Spéciaux">
                                    @foreach ($soinsSpeciauxList as $soin_speciaux)
                                        <option value="{{ $soin_speciaux }}"
                                            aria-placeholder="Selectionnez une ou plusieurs options"
                                                {{ isset($medical) && (is_array(json_decode($medical->soin_speciaux, true))) && in_array($soin_speciaux, json_decode($medical->soin_speciaux, true)) ? 'selected' : '' }}>
                                            {{ $soin_speciaux }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('soin_speciaux')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        <!--Groupes Sanguins-->
                        <div class="form-group">
                            <label for="groupe_sanguin">Groupe Sanguin</label>
                            <select name="groupe_sanguin" id="groupe_sanguin" class="form-control" title="Groupe Sanguin">
                                @foreach ($groupesSanguinsList as $groupe_sanguin)
                                    <option value="{{ $groupe_sanguin }}"
                                        {{ isset($medical) && $medical->groupe_sanguin == $groupe_sanguin ? 'selected' : '' }}>
                                        {{ $groupe_sanguin }}
                                    </option>
                            @endforeach
                            </select>
                        </div>

                        <!-- Poids -->
                        <div class="form-group">
                            <label for="poids">Poids (kg)</label>
                            <input type="number" name="poids" id="poids" class="form-control" value="{{ old('poids', isset($medical) ? $medical->poids : '') }}">
                            @error('poids')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Taille -->
                        <div class="form-group">
                            <label for="taille">Taille (cm)</label>
                            <input type="number" name="taille" id="taille" class="form-control" value="{{ old('taille', isset($medical) ? $medical->taille : '') }}">
                            @error('taille')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">{{ 'Ajouter' }}</button>
                            <a href="{{ route('medical.host') }}" class="btn btn-secondary">Annuler</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/i18n/fr.js"></script>
<script>
    $(document).ready(function() {
<<<<<<< HEAD
    $('.selectpicker').selectpicker({
        liveSearchPlaceholder: 'Recherchez...',
        noneSelectedText: 'Aucune sélection',
        noneResultsText: 'Aucune correspondance pour {0}'
=======
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
>>>>>>> eb5097acfef62e1006b7e3a4e346c1471f2cba05
    });
});
</script>

@endsection
