@extends('welcome')
@section('frontend')
    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content">
                        <h3 class="fw-bold text-light">Our Experts</h3>
                        <p class="fw-medium text-light mt-5">Home | Our Experts</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 text-center bg-danger mb-5 pb-5 pt-5">
                    <div class="row text-right mt-3">
                        <div class="col-md-1"></div>
                        <div class="col-md-3 pl-0 pr-0">                           
                            <select class="form-control" name="" id="">
                                <option value="">Select Experts</option>
                                <option value="">David Simmons</option>
                                <option value="">Dr. Leonard Gigirdi</option>
                                <option value="">Dr. Alfredo Trento </option>
                            </select>
                        </div>
                        <div class="col-md-3 pl-0 pr-0">
                            <select class="form-control" name="" id="">
                                <option value="">Select Location</option>
                                <option value="">New York</option>
                                <option value="">Los Angelos</option>
                                <option value="">Chicago </option>
                            </select>
                        </div>
                        <div class="col-md-3 pl-0 pr-0">
                            <select class="form-control" name="" id="">
                                <option value="">Select Departments</option>
                                <option value="">Neurology</option>
                                <option value="">Cardiology</option>
                                <option value="">Pediatric </option>
                            </select>
                        </div>
                        <div class="col-md-2 button">
                            <a href="" class="btn btn-lg btn-primary px-5"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="doctors" class="mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="experts_content text-center">
                        <img class="rounded-4 mb-2" height="180px" src="images/doctor-1.jpg" alt="">
                    </div>
                        <div class="experts text-center">
                            <a href="">David Simmons</a>
                            <p>MBBS, DSS , FRCS</p>
                            <p class="mb-"><i class="fa-solid fa-location-dot"></i> New York</p>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-linkedin "></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>    
                    </div>
                <div class="col-md-3">
                    <div class="experts_content text-center">
                        <img class="rounded-4 mb-2" height="180px" src="images/doctor-2.jpg" alt="">
                    </div>
                        <div class="experts text-center">
                            <a href="">Dr. Alfredo Trento</a>
                            <p>MBBS, PGT , DD</p>
                            <p class="mb-"><i class="fa-solid fa-location-dot"></i> New York</p>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-linkedin "></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>    
                    </div>
                <div class="col-md-3">
                    <div class="experts_content text-center">
                        <img class="rounded-4 mb-2" height="180px" src="images/doctor-3.jpg" alt="">
                    </div>
                        <div class="experts text-center">
                            <a href="">Leonard Girardi</a>
                            <p>MBBS, FCPS , FCRS</p>
                            <p class="mb-"><i class="fa-solid fa-location-dot"></i> New York</p>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-linkedin "></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>    
                    </div>
                <div class="col-md-3">
                    <div class="experts_content text-center">
                        <img class="rounded-4 mb-2" height="180px" src="images/doctor-5.jpg" alt="">
                    </div>
                        <div class="experts text-center">
                            <a href="">Dr. Stephen r Carter</a>
                            <p>MBBS, DSS , FRCS</p>
                            <p class="mb-"><i class="fa-solid fa-location-dot"></i> New York</p>
                            <a href="">
                                <i class="fa-brands fa-facebook"></i>
                                <i class="fa-brands fa-instagram"></i>
                                <i class="fa-brands fa-linkedin "></i>
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>    
                    </div>
            </div>
        </div>
    </section>
    <section>

@endsection   