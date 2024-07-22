@extends('layouts.visiteur')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($events as $evenement)
            <div class="col-md-4 mb-4"> <!-- Change to col-md-4 for 3 cards per row -->
                <div class="card" style="width: 100%;">
                    <img src="{{ Vite::asset('storage/app/public/'.$evenement->image) }}"style="width: 100%; height: 300px; object-fit: cover;" class="card-img-top" alt="{{ $evenement->titre }}">
                    <div class="card-body">
                    <h3 class="card-title" style="color: blue;">{{ $evenement->titre }}</h3>
                        <br>
                        <h4> LES INFORMATIONS DE L'EVENEMENT :</h4>
                        <ul>
                           <li> La description:   {{ $evenement->description }}</li>
                            <li> La date:   {{ $evenement->date }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection