@extends('layouts.visiteur')
@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb py-5">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4 " >Notre Galleries</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Acceuil</a></li>
                <li class="breadcrumb-item active text-white">Gallery</li>
            </ol>    
        </div>
    </div>
<!-- Header End -->

<!-- Gallery Start -->
    <div class="container-fluid gallery py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-secondary">Notre Galleries</p>
                <h1 class="display-4 mb-4">Voir notre galerie</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2  bs-cyan bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                            <span class="text-dark" style="width: 150px;">Toute la Galleries</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3  bs-cyan bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Nos projets</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2  bs-cyan bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Nos evenements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2  bs-cyan bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                            <span class="text-dark" style="width: 150px;">L'administration</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2  bs-cyan bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Nos activites</span>
                        </a>
                    </li>
                </ul>
            <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" data-lightbox="Gallery-1" class="my-auto"><i class="fas fa-search-plus btn-primary  btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos projets</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" data-lightbox="Gallery-2" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos projets</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" data-lightbox="Gallery-3" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" data-lightbox="Gallery-4" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" data-lightbox="Gallery-5" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos projets</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" data-lightbox="Gallery-6" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos projets</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" data-lightbox="Gallery-7" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos projets</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" data-lightbox="Gallery-8" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" data-lightbox="Gallery-9" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" data-lightbox="Gallery-10" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" data-lightbox="Gallery-11" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" data-lightbox="Gallery-12" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" data-lightbox="Gallery-13" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" data-lightbox="Gallery-14" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" data-lightbox="Gallery-15" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos evenements</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" data-lightbox="Gallery-16" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">L'administration</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-2.jpg')}}" data-lightbox="Gallery-17" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">L'administration</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" data-lightbox="Gallery-18" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">L'administration</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" data-lightbox="Gallery-19" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">L'administration</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-3.jpg')}}" data-lightbox="Gallery-20" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" data-lightbox="Gallery-21" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-6.jpg')}}" data-lightbox="Gallery-22" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-5.jpg')}}" data-lightbox="Gallery-23" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-7.jpg')}}" data-lightbox="Gallery-24" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-4.jpg')}}" data-lightbox="Gallery-25" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="gallery-img">
                                            <img class="img-fluid rounded w-100" src="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" alt="">
                                            <div class="gallery-overlay p-4">
                                                <h4 class="text-secondary">Nos activites</h4>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{Vite::asset('resources/assets/asset/img/gallery-1.jpg')}}" data-lightbox="Gallery-26" class="my-auto"><i class="fas fa-search-plus btn-primary btn-primary-outline-0 rounded-circle p-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- gallery End -->

@endsection