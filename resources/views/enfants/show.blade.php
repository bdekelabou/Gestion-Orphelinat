@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Bilans Médicaux de {{ $enfant->user->nom }} {{ $enfant->user->prenom }}</h1>
    <!-- Autres détails de l'enfant -->

   
    @if($enfant->bilansMedicaux->isEmpty())
        <p>Aucun bilan médical pour cet enfant.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Groupe Sanguin</th>
                    <th>Poids (kg)</th>
                    <th>Taille (cm)</th>
                    <th>Vaccins</th>
                    <th>Antécédents Médicaux</th>
                    <th>Appareils Médicaux</th>
                    <th>Soins Spéciaux</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enfant->bilansMedicaux as $medical)
                    <tr>
                        <td>{{ $medical->id }}</td>
                        <td>{{ $medical->groupe_sanguin ?? 'N/A' }}</td>
                        <td>{{ $medical->poids ?? 'N/A' }}</td>
                        <td>{{ $medical->taille ?? 'N/A' }}</td>
                        <td>
                            @if(!empty($medical->vaccin))
                                <ul>
                                    @foreach($medical->vaccin as $vaccin)
                                        <li>{{ $vaccin }}</li>
                                    @endforeach
                                </ul>
                            @else
                                Aucun
                            @endif
                        </td>
                        <td>
                            @if(!empty($medical->antecedent_medicaux))
                                <ul>
                                    @foreach($medical->antecedent_medicaux as $antecedent)
                                        <li>{{ $antecedent }}</li>
                                    @endforeach
                                </ul>
                            @else
                                Aucun
                            @endif
                        </td>
                        <td>
                            @if(!empty($medical->appareil_medicaux))
                                <ul>
                                    @foreach($medical->appareil_medicaux as $appareil)
                                        <li>{{ $appareil }}</li>
                                    @endforeach
                                </ul>
                            @else
                                Aucun
                            @endif
                        </td>
                        <td>
                            @if(!empty($medical->soin_speciaux))
                                <ul>
                                    @foreach($medical->soin_speciaux as $soin)
                                        <li>{{ $soin }}</li>
                                    @endforeach
                                </ul>
                            @else
                                Aucun
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ route('enfants.index') }}" class="btn btn-secondary mt-3">Retour à la liste des enfants</a>
</div>
@endsection