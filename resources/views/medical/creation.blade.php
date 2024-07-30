@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Faire un bilan</h4>
                    <form method="POST" action="{{ route('medical.store') }}">
                        @csrf

                        <!-- antécédents_familiaux -->
                        <div class="form-group">
                            <label for="antécédents_familiaux">{{ __('antécédents_familiaux') }}</label>
                            <input id="antécédents_familiaux" class="form-control" type="text" name="antécédents_familiaux" value="{{ old('antécédents_familiaux') }}" required autofocus />
                            @error('antécédents_familiaux')

                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- vaccinations -->
                            <div class="form-group">
                                <label for="vaccinations">{{ __('vaccinations') }}</label>
                                <input id="vaccinations" class="form-control" type="text" name="vaccinations" value="{{ old('vaccinations') }}" required />
                                @error('vaccinations')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        <!--maladies_antérieures -->
                            <div class="form-group">
                                <label for="maladies_antérieures">{{ __('maladies_antérieures') }}</label>
                                <input id="maladies_antérieures" class="form-control" type="text" name="maladies_antérieures" value="{{ old('maladies_antérieures') }}" required />
                                @error('maladies_antérieures')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        <!--examen_physique -->
                            <div class="form-group">
                                <label for="examen_physique">{{ __('examen_physique') }}</label>
                                <input id="examen_physique" class="form-control" type="text" name="examen_physique" value="{{ old('examen_physique') }}" required />
                                @error('examen_physique')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        <!--etat_mental -->
                            <div class="form-group">
                                <label for="etat_mental">{{ __('etat_mental') }}</label>
                                <input id="etat_mental" class="form-control" type="text" name="etat_mental" value="{{ old('etat_mental') }}" required />
                                @error('etat_mental')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                             <!--autres_examens -->
                             <div class="form-group">
                                <label for="autres_examens">{{ __('autres_examens') }}</label>
                                <input id="autres_examens" class="form-control" type="text" name="autres_examens" value="{{ old('autres_examens') }}" required />
                                @error('autres_examens')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>


                             <!--appareils_medicaux -->
                             <div class="form-group">
                                <label for="appareils_medicaux">{{ __('appareils_medicaux') }}</label>
                                <input id="appareils_medicaux" class="form-control" type="text" name="appareils_medicaux" value="{{ old('appareils_medicaux') }}" required />
                                @error('appareils_medicaux')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            
                             <!--soins_speciaux -->
                             <div class="form-group">
                                <label for="soins_speciaux">{{ __('soins_speciaux') }}</label>
                                <input id="soins_speciaux" class="form-control" type="text" name="soins_speciaux" value="{{ old('soins_speciaux') }}" required />
                                @error('soins_speciaux')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                        <div class="form-group mt-4 text-center">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <a href="{{ route('medical.host') }}" class="btn btn-secondary">Annuler</a>
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
