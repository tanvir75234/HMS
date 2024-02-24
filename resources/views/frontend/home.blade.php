@extends('welcome')
@section('frontend')
<section>
    <div id="banner">
        <div class="container">
            <div class="banner_content">
                <h3>Search The Best Doctors</h3>
                <p>Find out department and location based doctors near your area</p>
            </div>
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
                    <a href="" class="btn btn-lg btn-primary px-5"><i
                            class="fa-solid fa-magnifying-glass"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="gallery">
        <div class="container">
            <div class="row gallery">
                <div class="col-md-4 gallery_part">
                    <div class="gallery_icon text-center">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="gallery_content">
                        <h3>Operation Theater</h3>
                        <p>We have modern and well furnished operation theatre in the city</p>
                    </div>
                </div>
                <div class="col-md-4 gallery_part">
                    <div class="gallery_icon text-center">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="gallery_content gal">
                        <h3>Emergency Services</h3>
                        <p>If you need any kind of emergency services, we are always available</p>
                    </div>
                </div>
                <div class="col-md-4 gallery_part">
                    <div class="gallery_icon text-center">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="gallery_content">
                        <h3>Qualified Doctors</h3>
                        <p>We have the best qualified doctors to serve our valuable patients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="common_heading">
                        <h2>Our Service</h2>
                        <p>Lorem ipsum dolor sit amet, nibh saperet te pri, at nam diceret disputationi. Quo an
                            consul <br> impedit, usu possim evertitur dissentiet ei, ridens minimum nominavi et vix.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 service_part mt-5">
                    <div class="service_icon text-center mt-5">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <div class="service_content mt-5">
                        <h3>Operation Theater</h3>
                        <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        </p>
                        <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 service_part">
                    <div class="service_icon text-center">
                        <i class="fas fa-dna"></i>
                    </div>
                    <div class="service_content">
                        <h3>Operation Theater</h3>
                        <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        </p>
                        <a href="">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-4 service_part mt-5">
                    <div class="service_icon text-center mt-5">
                        <i class="fas fa-tooth"></i>
                    </div>
                    <div class="service_content mt-5">
                        <h3>Operation Theater</h3>
                        <p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has.
                        </p>
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
<section>
    <div id="summary" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="summary mx-5">
                        <i class="fas fa-users"></i>
                        <h3 class="text-light mb-2">100</h3>
                        <h3 class="text-light">Patients</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary mx-5">
                        <i class="far fa-building"></i>
                        <h3 class="text-light mb-2">100</h3>
                        <h3 class="text-light">Patients</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary mx-5">
                        <i class="fas fa-user-md"></i>
                        <h3 class="text-light mb-2">100</h3>
                        <h3 class="text-light">Patients</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="summary mx-5">
                        <i class="fa-solid fa-heart-pulse"></i>
                        <h3 class="text-light mb-2">100</h3>
                        <h3 class="text-light">Patients</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="common_heading">
                        <h2>Our Testimonial</h2>
                        <p>Lorem ipsum dolor sit amet, nibh saperet te pri, at nam diceret disputationi. Quo an
                            consul <br> impedit, usu possim evertitur dissentiet ei, ridens minimum nominavi et vix.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testi_content">
                        <img class="rounded-4 mt-4 mb-2" height="80px" src="{{ asset('contents/frontend') }}/images/doctor-1.jpg"
                            alt="">
                        <p>Cardiologist</p>
                        <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo
                            dignissimos sequi iste tempore illum animi repellendus voluptate neque. Soluta corporis
                            minus tenetur ipsa recusandae perferendis molestiae perspiciatis, maxime pariatur non.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="experts">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="common_heading">
                        <h2>Our Experts</h2>
                        <p>Lorem ipsum dolor sit amet, nibh saperet te pri, at nam diceret disputationi. Quo an
                            consul <br> impedit, usu possim evertitur dissentiet ei, ridens minimum nominavi et vix.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="experts_content text-center">
                        <img class="rounded-4 mb-2" height="180px" src="{{ asset('contents/frontend') }}/images/doctor-1.jpg" alt="">
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
                        <img class="rounded-4 mb-2" height="180px" src="{{ asset('contents/frontend') }}/images/doctor-2.jpg" alt="">
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
                        <img class="rounded-4 mb-2" height="180px" src="{{ asset('contents/frontend') }}/images/doctor-3.jpg" alt="">
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
                        <img class="rounded-4 mb-2" height="180px" src="{{ asset('contents/frontend') }}/images/doctor-5.jpg" alt="">
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
    </div>
    </div>
</section>
<section>
    <div id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="common_heading">
                        <h2>Our Blog</h2>
                        <p>Lorem ipsum dolor sit amet, nibh saperet te pri, at nam diceret disputationi. Quo an
                            consul <br> impedit, usu possim evertitur dissentiet ei, ridens minimum nominavi et vix.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_img">
                        <img height="215px" src="{{ asset('contents/frontend') }}/images/blog-1.jpg" alt="">
                    </div>
                    <div class="blog_content">
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est
                            distinctio corrupti quia cupiditate maxime deserunt.</p>
                        <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_img">
                        <img height="215px" src="{{ asset('contents/frontend') }}/images/blog-2.jpg" alt="">
                    </div>
                    <div class="blog_content">
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est
                            distinctio corrupti quia cupiditate maxime deserunt.</p>
                        <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog_img">
                        <img height="215px" src="{{ asset('contents/frontend') }}/images/blog-3.jpg" alt="">
                    </div>
                    <div class="blog_content">
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est
                            distinctio corrupti quia cupiditate maxime deserunt.</p>
                        <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection