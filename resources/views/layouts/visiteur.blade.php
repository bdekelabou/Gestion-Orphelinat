<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Sparlex - Spa Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{Vite::asset('resources/assets/asset/lib/animate/animate.min.css ')}}" rel="stylesheet">
        <link href="{{Vite::asset('resources/assets/asset/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{Vite::asset('resources/assets/asset/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{Vite::asset('resources/assets/asset/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{Vite::asset('resources/assets/asset/css/style.css')}}" rel="stylesheet">
    </head>
 
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
<!-- Navbar start -->
    <div class="container-fluid sticky-top px-0">
        <div class="container-fluid sticky-top px-0">
            <div class="container-fluid topbar d-none d-lg-block">
                <div class="container px-0">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="d-flex flex-wrap">
                                <a href="#" class="me-4"><i class="fas fa-map-marker-alt me-2"></i>Localisation</a>
                                <a href="#" class="me-4"><i class="fas fa-phone-alt me-2"></i>+22893849200</a>
                                <a href="#"><i class="fas fa-envelope me-2"></i>Example@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="me-3 btn-square border rounded-circle nav-fill"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn-square border rounded-circle nav-fill"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light">
            <div class="container px-0">
                <nav class="navbar navbar-light navbar-expand-xl">
                    <a href="/" class="navbar-brand">
                        <h3 class="text-primary display-6"><img src="{{Vite::asset('resources/assets/asset/img/logo.png')}}" class="img-fluid" alt="Image">
                        </h3>
                    </a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light py-3" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="/" class="nav-item nav-link active">Acceuil</a>
                            <a href="/apropos" class="nav-item nav-link">A propos</a>
                            <a href="/nosprojets" class="nav-item nav-link">Nos Projets</a>
                            <a href="/gallery" class="nav-item nav-link">Galleries</a>
                            <a href="/Equipe" class="nav-item nav-link">Equipe</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                                            @if (Route::has('login'))
                                            <nav class="-mx-3 flex flex-1 justify-end">
                                                @auth
                                                    <a
                                                        href="{{ url('/dashboard') }}"
                                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                    >
                                                        Dashboard
                                                    </a>
                                                @else
                                                    <a
                                                        href="{{ route('login') }}"
                                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                    >
                                                        Log in
                                                    </a>
                                                    @if (Route::has('register'))
                                                        <a
                                                            href="{{ route('register') }}"
                                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                                        >
                                                            Register
                                                        </a>
                                                    @endif
                                                @endauth
                                            </nav>
                                        @endif  
                                        <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                            <button class="btn-search btn btn-primary btn-primary-outline-0 rounded-circle btn-lg-square" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                                            {{-- <a href="appointment.html" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-4 ms-4">Book Appointment</a> --}}
                                        </div>                 
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<!-- Navbar End -->

    <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Don</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Modal Search End -->


        @yield('content')


    <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-12">
                        <div class="row g-4">
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Adresse</h4>
                                        <p class="mb-0">1010 Lomé, Togo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Envoyez-nous un mail</h4>
                                        <p class="mb-0">info@example.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                    <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                    <div>
                                        <h4>Téléphone</h4>
                                        <p class="mb-0">(+228) 93849200</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="rounded">
                            <iframe class="rounded-top w-100" 
                            style="height: 450px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31708.18233239353!2d1.22368495!3d6.12232095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1027a4b79f8e3e4d%3A0x233a4f96b2a9cd0e!2sIPNET%20Institute%20of%20Technology!5e0!3m2!1sfr!2stg!4v1623779336345!5m2!1sfr!2stg" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact End -->

    <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>SuperNova</a>, All right reserved. </span>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-twitter"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-2"><i class="fab fa-instagram"></i></a>
                            <a href="" class="btn btn-light btn-light-outline-0 btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-white">
                        <p> Designed By  ANGE & ZARIA </p>
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <div class="col-md-4">
                            &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; version 1.0
                    </div>
                    </div> --}}
                </div>
            </div>
        </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   
            
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/wow/wow.min.js')}}"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/easing/easing.min.js')}}"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{Vite::asset('resources/assets/asset/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{Vite::asset('resources/assets/asset/js/main.js')}}"></script>

    </body>
</html>
