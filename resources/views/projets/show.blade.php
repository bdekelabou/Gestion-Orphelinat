@extends('layouts.visiteur')

@section('content')
<div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 800px;">
        <h1 class="display-3">{{ $projet->nom }}</h1>
        <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" style="max-width: 200px; margin-top: 10px;">
        <p class="fs-4 text-uppercase text-center text-secondary">Description detaillee</p>
        <p>{{ $projet->detail }}</p>
        <a href="{{ route('welcome') }}" class="btn btn-warning">Retour</a>
        <a href="#" class="btn btn-secondary" style="margin-left:8rem;">Faire un don</a>    

    </div>
</div>
@endsection