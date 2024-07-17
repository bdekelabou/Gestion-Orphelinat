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
                    <div class="collapse navbar-collapse bg-light py-3 ange" id="navbarCollapse">
                        <div class="navbar-nav mx-auto border-top">
                            <a href="/" class="nav-item nav-link ">Acceuil</a>
                            <a href="/apropos" class="nav-item nav-link">A propos</a>
                            <a href="/nosprojets" class="nav-item nav-link">Nos Projets</a>
                            <a href="/gallery" class="nav-item nav-link">Galleries</a>
                            <a href="/Equipe" class="nav-item nav-link">Evenement</a>
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

 <div class="container-fluid appointment py-5">
        <!-- Counter End -->
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="appointment-form p-5">
                        <p class="fs-4 text-uppercase text-">Commentaire</p>
                        <h1 class="display-4 mb-4 text-white">Vos impressions</h1>
                        <form>
                            <div class="row gy-3 gx-4">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control py-3 border-white bg-transparent text-white" placeholder="First Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control py-3 border-white bg-transparent text-white" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-select py-3 border-white bg-transparent" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control py-3 border-white bg-transparent">
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control border-white bg-transparent text-white" name="text" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-time p-5">
                        <h1 class="display-5 mb-4">Opening Hours</h1>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Saturday:</p>
                            <p>09:00 am – 10:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Sunday:</p>
                            <p>09:00 am – 10:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Monday:</p>
                            <p>09:00 am – 10:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Tuesday:</p>
                            <p>09:00 am – 10:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white">
                            <p>Wednes:</p>
                            <p>09:00 am – 08:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white mb-4">
                            <p>Thursday:</p>
                            <p>09:00 am – 05:00 pm</p>
                        </div>
                        <div class="d-flex justify-content-between fs-5 text-white mb-4">
                            <p>Friday:</p>
                            <p>CLOSED</p>
                        </div>
                        <p class="text-dark">Check out seasonal discounts for best offers.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


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
