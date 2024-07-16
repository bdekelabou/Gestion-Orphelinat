@extends('layouts.visiteur')

@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb py-5">
        <div class="container text-center py-5">
            <h3 class="text-white display-3 mb-4">Contact</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>    
        </div>
    </div>
<!-- Header End -->

<!-- Contact Start -->
    <div class="container-fluid contact py-5" style="background: var(--bs-primary);">
        <div class="container pt-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="text-center">
                        <h1 class="display-3 text-white mb-4">Contact Us</h1>
                        <p class="text-white fs-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-secondary" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form rounded p-5">
                        <form>
                            <h1 class="display-6 mb-4">Do You have Any Questions?</h1>
                            <div class="row gx-4 gy-3">
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your First Name">
                                </div>
                                <div class="col-xl-6">
                                    <input type="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                                </div>
                                <div class="col-xl-6">
                                    <input type="text" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-white border-0 py-3 px-4" rows="4" cols="10" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-primary-outline-0 w-100 py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pb-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-12">
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">123 North tower New York, USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">info@example.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-inline-flex bg-light w-100 border border-primary p-4 rounded">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0">(+012) 3456 7890 123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="rounded">
                        <iframe class="rounded-top w-100" 
                        style="height: 450px; margin-bottom: -6px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd" 
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class=" text-center p-4 rounded-bottom bg-primary">
                        <h4 class="text-white fw-bold">Follow Us</h4>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-light-outline-0 btn-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Contact End -->

@endsection