@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Bilans scolaire de {{ $enfant->user->nom }} {{ $enfant->user->prenom }}</h1>

    <!-- Autres détails de l'enfant -->

    <!-- Section des situations scolaires -->
    @if($enfant->bilansScolaires->isEmpty())
        <p>Aucun bilan scolaire pour cet enfant.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Niveau</th>
                    <th>Établissement</th>
                    <th>Classe d'arrivée</th>
                    <th>Classe actuelle</th>
                    <th>Déjà Redoublé</th>
                </tr>
            </thead>    
            <tbody>
                @foreach($enfant->bilansScolaires as $scolaire)
                    <tr>
                        <td>{{ $scolaire->id }}</td>
                        <td>{{ $scolaire->niveau }}</td>
                        <td>{{ $scolaire->etablissement }}</td>
                        <td>{{ $scolaire->classe_arrivee }}</td>
                        <td>{{ $scolaire->classe_actuelle }}</td>
                        <td>{{ $scolaire->redoublement ? 'Oui' : 'Non' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ route('enfants.index') }}" class="btn btn-secondary mt-3">Retour à la liste des enfants</a>
</div>
@endsection