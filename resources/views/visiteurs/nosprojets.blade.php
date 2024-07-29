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
<<<<<<< HEAD

=======
>>>>>>> ff5450d68b22073c4e665c139df58d76a1d4f903
    <div class="container-fluid services py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-center text-secondary">Nos Projets</p>
<<<<<<< HEAD
                <h1 class="display-3 ">Nos projets à réaliser</h1>
            </div>
            <div class="row g-4">
                @foreach ($projets as $projet)
=======
                <h1 class="display-3 "> Nos projets a realiser</h1>
            </div>
            <div class="row g-4">
>>>>>>> ff5450d68b22073c4e665c139df58d76a1d4f903
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
<<<<<<< HEAD
                                    <h3>{{ $projet->nom }}</h3>
                                    <p>
                                        {{ \Illuminate\Support\Str::limit($projet->detail, 100) }}
                                        @if (strlen($projet->detail) > 100)
                                            <a href="{{ route('projets.show', $projet->id) }}" class="text-dark" style="text-decoration:underline;font-weight:bold">Voir plus</a>
                                        @endif
                                    </p>
                                    <h3>{{ $projet->date_debut }}</h3>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">FAIRE UN DON</a>
=======
                                    <h3>Skin Care</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
>>>>>>> ff5450d68b22073c4e665c139df58d76a1d4f903
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
<<<<<<< HEAD
                                    <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" style="max-width: 200px; max-height:200px margin-top: 10px;">
                                </div>
                            </div>

                        </div> 
                        
                    </div>
                    
                </div>
                @endforeach
                
=======
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-1.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-start border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-2.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Face Masking</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>Stream Bath</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-3.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-start border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-4.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Facial Therapy</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-end border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <div class="services-content text-end">
                                    <h3>Body Massage</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-5.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="services-item bg-light border-4 border-start border-secondary rounded p-4">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <div class="services-img d-flex align-items-center justify-content-center rounded">
                                    <img src="{{Vite::asset('resources/assets/asset/img/services-6.jpg')}}" class="img-fluid rounded" alt="">
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="services-content text-start">
                                    <h3>Aroma Therapy</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                    <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="services-btn text-center">
                        <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-3 px-5" id="me">Service More</a>
                    </div>
                </div>
>>>>>>> ff5450d68b22073c4e665c139df58d76a1d4f903
            </div>
        </div>
    </div>
<!-- Services End -->

@endsection