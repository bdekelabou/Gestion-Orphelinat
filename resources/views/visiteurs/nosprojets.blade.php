@extends('layouts.visiteur')

@section('content')

 <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb py-5">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Nos Projets</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                <li class="breadcrumb-item active text-white">Nos Projets</li>
            </ol>    
        </div>
    </div>
<!-- Header End -->

<!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-secondary">Nos Projets</p>
                <h1 class="display-3 ">Nos projets à réaliser</h1>
            </div>
            <div class="row g-4">
                @foreach ($projets as $projet)

                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>{{ $projet->nom }}</h3>
                                    <p>
                                        {{ \Illuminate\Support\Str::limit($projet->detail, 100) }}
                                        @if (strlen($projet->detail) > 100)
                                            <a href="{{ route('projets.show', $projet->id) }}" class="text-dark" style="text-decoration:underline;font-weight:bold">Voir plus</a>
                                        @endif
                                    </p>
                                    <h3>{{ $projet->date_debut }}</h3>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">FAIRE UN DON</a>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" style="max-width: 200px; max-height:200px ; margin-top: 10px;">
                                </div>
                            </div>

                        </div> 
                        
                    </div>
                    
                </div>
                @endforeach
 
            </div>
        </div>
    </div>
<!-- Services End -->

@endsection