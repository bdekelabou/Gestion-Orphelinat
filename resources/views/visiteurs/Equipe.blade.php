@extends('layouts.visiteur')

@section('content')

<!-- Header Start -->
  <div class="container-fluid bg-breadcrumb py-5">
    <div class="container text-center py-5">
        <h3 class="text-white display-3 mb-4">Equipe</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Equipe</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Team Start -->
  <div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <p class="fs-4 text-uppercase text-primary">Spa Specialist</p>
            <h1 class="display-4 mb-4">Spa & Beauty Specialist</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="img/team-1.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h3 class="text-white">Oliva Mia</h3>
                        <p class="mb-0 text-white">Spa & Beauty Expert</p>
                    </div>
                    <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="img/team-2.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h3 class="text-white">Charlotte Ross</h3>
                        <p class="mb-0 text-white">Spa & Beauty Expert</p>
                    </div>
                    <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="img/team-3.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h3 class="text-white">Amelia Luna</h3>
                        <p class="mb-0 text-white">Spa & Beauty Expert</p>
                    </div>
                    <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="team-item">
                    <div class="team-img rounded-top">
                        <img src="img/team-4.png" class="img-fluid w-100 rounded-top bg-light" alt="">
                    </div>
                    <div class="team-text rounded-bottom text-center p-4">
                        <h3 class="text-white">Isabella Evelyn</h3>
                        <p class="mb-0 text-white">Spa & Beauty Expert</p>
                    </div>
                    <div class="team-social">
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-light btn-light-outline-0 btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection