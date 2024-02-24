@extends('welcome')
@section('frontend')

    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content">
                        <h3 class="fw-bold text-light">Our Blog</h3>
                        <p class="fw-medium text-light mt-5">Home | Our Blog</p>
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
                            <p>Lorem ipsum dolor sit amet, nibh saperet te pri, at nam diceret disputationi. Quo an consul <br> impedit, usu possim evertitur dissentiet ei, ridens minimum nominavi et vix.</p>
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
                            <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est distinctio corrupti quia cupiditate maxime deserunt.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="blog_img">
                            <img height="215px" src="{{ asset('contents/frontend') }}/images/blog-2.jpg" alt="">
                        </div>
                        <div class="blog_content">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est distinctio corrupti quia cupiditate maxime deserunt.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                        </div>
                    </div>
                     <div class="col-md-4">
                        <div class="blog_img">
                            <img height="215px" src="{{ asset('contents/frontend') }}/images/blog-3.jpg" alt="">
                        </div>
                        <div class="blog_content">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p class="mt-3 mb-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est distinctio corrupti quia cupiditate maxime deserunt.</p>
                            <a href="">Learn More <i class="fa-solid fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        </section>   
@endsection       