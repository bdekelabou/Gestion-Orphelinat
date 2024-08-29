@extends('layouts.visiteur')

@section('content')
<!-- Header start -->
    <div class="container-fluid bg-breadcrumb py-5">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">A propos</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item active text-white">A propos</li>
            </ol>    
        </div>
    </div>
<!-- Header End -->
  
<!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <div class="video">
                        <img src="{{Vite::asset('resources/assets/asset/img/about-1.jpg')}}" class="img-fluid rounded" alt="">
                        <div class="position-absolute rounded border-5 border-top border-start border-white" style="bottom: 0; right: 0;;">
                            <img src="{{Vite::asset('resources/assets/asset/img/about-2.jpg')}}" class="img-fluid rounded" alt="">
                        </div>
                        {{-- <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="" data-bs-target="#videoModal">
                            <span></span>
                        </button> --}}
                        <a href="https://www.youtube.com/watch?app=desktop&v=oTiHd1L3AyI" class="btn btn-play" target="_blank">
                            <span></span>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="fs-4 text-uppercase text-secondary">Supernova</p>
                    <h1 class="display-4 mb-4">Un Refuge pour les Enfants</h1>
                    <p class="mb-4">Supernova est un orphelinat dédié à fournir un foyer sûr et aimant aux enfants qui en ont besoin. Nous nous engageons à offrir un environnement enrichissant où chaque enfant peut s'épanouir et se développer.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-heart fa-3x text-secondary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Notre Mission</h5>
                                    <p class="mb-0">Offrir un soutien inconditionnel et des soins de qualité aux enfants orphelins, en favorisant leur bien-être physique, émotionnel et éducatif.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-hands-helping fa-3x text-secondary"></i>
                                <div class="ms-4">
                                    <h5 class="mb-2">Nos Valeurs</h5>
                                    <p class="mb-0">Compassion, intégrité et engagement envers le bien-être des enfants. Nous croyons en l'importance d'une communauté solidaire pour soutenir notre mission.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="my-4">À Supernova, nous nous efforçons de créer un avenir meilleur pour chaque enfant, en leur offrant des opportunités et un soutien pour réaliser leur plein potentiel.</p>
                    <p class="mb-4">Notre orphelinat est un lieu où les enfants peuvent trouver non seulement un toit au-dessus de leur tête, mais aussi un foyer où ils se sentent aimés et valorisés.</p>
                    <a href="/contact" class="btn btn-secondary">Contactez-nous</a>
            </div>
        </div>
    </div>    
<!-- About end -->

<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe id="video" width="100%" height="400" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<!--  Modal Video End -->

@endsection