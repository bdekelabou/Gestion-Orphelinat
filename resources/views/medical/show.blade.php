@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 800px;">
        <h1 class="display-3">{{ $enfants->nom }}</h1>
        <h1 class="display-3">{{ $medical->antecedent_medicaux}}</h1>
        <h1 class="display-3">{{ $medical->vaccin}}</h1>
        <h1 class="display-3">{{ $medical->soin_speciaux}}</h1>
        <h1 class="display-3">{{ $medical->groupe_sanguin}}</h1>
        <h1 class="display-3">{{ $medical->poids}}</h1>
        <h1 class="display-3">{{ $medical->taille}}</h1>
        <a href="{{ route('enfants.index') }}" class="btn btn-warning">Retour</a>
    </div>
</div>
@endsection