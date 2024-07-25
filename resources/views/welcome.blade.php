@extends('layouts.visiteur')
  @section('content')
                      
<!-- Carousel Start -->
    <div class="container-fluid carousel-header px-0">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{Vite::asset('resources/assets/asset/img/carousel-3.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-capitalize mb-3" style="color: #000000;">BIENVENUE A L'ORPHELINAT SUPERNOVA</h1>
                            <div class="d-flex align-items-center justify-content-center">
                               <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">NOS PROJETS</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5"  href="/don/visiteur">FAIRE UN DON</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/assets/asset/img/carousel-2.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-capitalize mb-2" style="color: #000000;">FAITES PARTIS DE NOTRE MISSION</h1>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">NOS PROJETS</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5"  href="/don/visiteur"> FAIRE UN DON</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/assets/asset/img/carousel-1.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-capitalize mb-2" style="color: #000000;">SOYEZ UN PILIER POUR LES ENFANTS</h1>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">NOS PROJETS</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5" href="/don/visiteur"> FAIRE UN DON</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
<!-- Carousel End -->

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
                                <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" style="max-width: 200px; max-height:200px margin-top: 10px;">
                            </div>
                        </div>

                    </div> 
                    <div class="col-12">
                        <div class="services-btn text-center">
                            <a href="#" class="btn btn-secondary btn-primary-outline-0 rounded-pill py-3 px-5" id="me">Service More</a>
                        </div>
                    </div>
                </div>
                   
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="display-4 mb-4 text-uppercase mia ">vos points de vue</p>
                <h1 class="display-4 mb-4 text-black">Ceux que nos visiteur dise !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{Vite::asset('resources/assets/asset/img/testimonial-1.jpg')}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-jee">Person Name</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-black">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{Vite::asset('resources/assets/asset/img/testimonial-2.jpg')}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-jee">Person Name</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-black">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item rounded p-4">
                    <div class="row">
                        <div class="col-4">
                            <div class="d-flex flex-column mx-auto">
                                <div class="rounded-circle mb-4" style="border: dashed; border-color: var(--bs-white);">
                                    <img src="{{Vite::asset('resources/assets/asset/img/testimonial-3.jpg')}}" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="text-center">
                                    <h4 class="mb-2 text-jee">Person Name</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="position-absolute" style="top: 20px; right: 25px;">
                                <i class="fa fa-quote-right fa-2x text-secondary"></i>
                            </div>
                            <div class="testimonial-content">
                                <div class="d-flex mb-4">
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star text-secondary"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="fs-5 mb-0 text-black">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor ut labore et dolore magna aliqua is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Testimonial End -->

<!-- Appointment Start -->
    <!-- Counter Start -->
        <div class="container-fluid counter-section">
            <div class="container py-5">
                <div class="row g-5 justify-content-center">
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-globe fa-5x mb-3" class="text-secon"></i>
                                <h5 class="text-black">Nombre d'enfant</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #cae7f2;"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">79</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-spa fa-5x mb-3"></i>
                                <h5 class="text-black">Admistraction</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #cae7f2;"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">29</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4">
                        <div class="counter-item p-5">
                            <div class="counter-content bg-white p-4">
                                <i class="fas fa-users fa-5x mb-3"></i>
                                <h5 class="text-black">Nombre de donateur</h5>
                                <div class="svg-img">
                                    <svg width="100" height="50">
                                        <polygon points="55, 10 85, 55 25, 55 25," style="fill: #cae7f2;"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="counter-quantity">
                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up">113</span>
                                <span class="h1 fw-bold text-white">+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Counter End -->

<!-- Appointment End -->

@endsection



       