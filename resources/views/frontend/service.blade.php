@extends('welcome')
@section('frontend')
    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content">
                        <h3 class="fw-bold text-light">Our Service</h3>
                        <p class="fw-medium text-light mt-5">Home | Our Service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 service_part mt-5">
                        <div class="service_icon text-center mt-5">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                        <div class="service_content mt-5">
                            <h3>Operation Theater</h3>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 service_part">
                        <div class="service_icon text-center">
                            <i class="fas fa-dna"></i>
                        </div>
                        <div class="service_content">
                            <h3>Operation Theater</h3>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 service_part mt-5">
                        <div class="service_icon text-center mt-5">
                            <i class="fas fa-tooth"></i>
                        </div>
                        <div class="service_content mt-5">
                            <h3>Operation Theater</h3>
                            <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="link">
                        <a class="btn btn-lg btn-primary" href="">View All Site</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection