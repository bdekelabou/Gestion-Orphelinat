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
                            <h1 class="display-3 text-capitalize mb-3" style="color: #000000;">Bienvenue à l'Orphelinat SuperNova</h1>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">Nos Projets</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5" href="#">Un Don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/assets/asset/img/carousel-2.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-capitalize mb-2" style="color: #000000;">Participez à notre mission</h1>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">Nos Projets</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5" href="#">Un Don</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{Vite::asset('resources/assets/asset/img/carousel-1.jpg')}}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-capitalize mb-2" style="color: #000000;">Soyez un pilier pour les enfants</h1>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn custom-btn-project rounded-pill py-3 px-5 me-4" href="#">Nos Projets</a>
                                <a class="btn custom-btn-donate rounded-pill py-3 px-5" href="#">Un Don</a>
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
                    <p class="fs-4 text-uppercase text-center text-primary">Our Service</p>
                    <h1 class="display-3">Spa & Beauty Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Skin Care</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="services-img d-flex align-items-center justify-content-center rounded">
                                        <img src="{{Vite::asset('resources/assets/asset/img/services-1.jpg')}}" class="img-fluid rounded" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
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
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Stream Bath</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
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
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
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
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="services-item bg-light border-4 border-end border-primary rounded p-4">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <div class="services-content text-end">
                                        <h3>Body Massage</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
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
                        <div class="services-item bg-light border-4 border-start border-primary rounded p-4">
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
                                        <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-2 px-4">Make Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="services-btn text-center">
                            <a href="#" class="btn btn-primary btn-primary-outline-0 rounded-pill py-3 px-5">Service More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- Services End -->
        
<!-- Appointment Start -->
    <div class="container-fluid appointment py-5">
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
<!-- Appointment End -->

<!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 800px;">
                <p class="fs-4 text-uppercase text-jee">vos points de vue</p>
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
                                    <p class="m-0 text-white">Profession</p>
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
                                    <p class="m-0 text-white">Profession</p>
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
                                    <p class="m-0 text-white">Profession</p>
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

@endsection



       