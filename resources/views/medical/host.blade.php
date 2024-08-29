@extends('layouts.admin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')

<style>
   
   .truncated-description {
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Limite le nombre de lignes */
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 4.5em; /* Ajuster la hauteur en fonction du nombre de lignes */
    margin-bottom: 0;
}

/* Conteneur des boutons de pagination */
.nav-buttons {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin: 1rem 0; /* Ajoute un espace autour des boutons */
}

/* Style des boutons de pagination */
.nav-buttons .btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0.5rem 1rem;
    border-radius: 0.375rem;
    border: 1px solid #333; /* Bordure de couleur sombre */
    background-color: #000; /* Fond noir */
    color: #fff; /* Texte blanc */
    cursor: pointer;
    transition: background-color 0.2s ease;
}

/* Style du bouton lorsque l'on passe la souris dessus */
.nav-buttons .btn:hover {
    background-color: #333; /* Fond noir plus clair */
}

/* Style du bouton lorsqu'il est désactivé */
.nav-buttons .btn:disabled {
    background-color: #666; /* Fond gris pour les boutons désactivés */
    cursor: not-allowed;
}

/* Style pour les flèches */
.arrow-left, .arrow-right {
    width: 1rem;
    height: 1rem;
    fill: #fff; /* Couleur des flèches en blanc */
}
</style>
@section('content')
    <div class="container">
        <h1>Liste des bilans médicaux</h1>

        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title" style="margin-top: 3% ; margin-left:2%"> <a href="{{ route('medical.creation') }}" class="btn btn-primary">Nouveau Bilan Médical</a></h4>
            
                    @if(session('success'))
                        <div class="alert alert-success mb-0 ms-3" style="background-color: #28a745; color: white;">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                    <div class="card-body" style="overflow-x: auto;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 50px;">ID</th>
                                    <th style="width: 150px;">Enfant</th>
                                    <th style="width: 200px;">Vaccins</th>
                                    <th style="width: 200px;">Antécédents Médicaux</th>
                                    <th style="width: 200px;">Appareils Médicaux</th>
                                    <th style="width: 200px;">Soins Spéciaux</th>
                                    <th style="width: 100px;">Groupe Sanguin</th>
                                    <th style="width: 100px;">Poids</th>
                                    <th style="width: 100px;">Taille</th>
                                    <th style="width: 200px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($medical as $bilan)
                                    <tr>
                                        <td>{{ $bilan->id }}</td>
                                        <td>{{ $bilan->enfant->user->nom }} {{ $bilan->enfant->user->prenom }}</td>

                                        <!-- Vaccins -->
                                        <td>
                                            {{ implode(', ', is_array($bilan->vaccin) ? $bilan->vaccin : (json_decode($bilan->vaccin, true) ?? [])) }}
                                        </td>

                                        <!-- Antécédents Médicaux -->
                                        <td>
                                            {{ implode(', ', is_array($bilan->antecedent_medicaux) ? $bilan->antecedent_medicaux : (json_decode($bilan->antecedent_medicaux, true) ?? [])) }}
                                        </td>

                                        <!-- Appareils Médicaux -->
                                        <td>
                                            {{ implode(', ', is_array($bilan->appareil_medicaux) ? $bilan->appareil_medicaux : (json_decode($bilan->appareil_medicaux, true) ?? [])) }}
                                        </td>

                                        <!-- Soins Spéciaux -->
                                        <td>
                                            {{ implode(', ', is_array($bilan->soin_speciaux) ? $bilan->soin_speciaux : (json_decode($bilan->soin_speciaux, true) ?? [])) }}
                                        </td>

                                        <td>{{ $bilan->groupe_sanguin }}</td>
                                        <td>{{ $bilan->poids }} kg</td>
                                        <td>{{ $bilan->taille }} cm</td>
                                        <td style="white-space: nowrap;">
                                            {{-- <a href="{{ route('medical.show', $bilan->id) }}" class="btn btn-info">Voir</a> --}}
                                            <a href="{{ route('medical.editer', $bilan->id) }}" class="btn btn-warning"><i class="fas fa-edit fa-sm"></i></a>
                                            <form action="{{ route('medical.destroy', $bilan->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash fa-sm"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                

                {{-- <div class="pagination mt-4">
                    @include('pagination.customPaginate', ['items' => $medical])
                </div> --}}
            </div>
        </div>
    </div>

@endsection
