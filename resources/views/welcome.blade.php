<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanvir General Hospital</title>
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/css/all.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('contents/frontend') }}/css/style.css">
</head>
@php
    $topbar = App\Models\Topbar::where('topbar_id',1)->first();
    $social = App\Models\Social::where('social_id',1)->first();
    $footer = App\Models\Footer::where('footer_id',1)->first();
@endphp

<body>
    <div class="top-part">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="icon_bar">
                        <ul>
                            <li><a href="{{ $social->facebook }}"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="{{ $social->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ $social->linkedin }}"><i class="fa-brands fa-linkedin "></i></a></li>
                            <li><a href="{{ $social->whatsapp }}"><i class="fa-brands fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="menu text-end">
                        <ul>
                            <li><a href=""><i class="fa-solid fa-envelope"></i> {{ $topbar->topbar_email }}</a> | </li>
                            <li><a href=""><i class="fa-solid fa-phone"></i> {{ $topbar->topbar_phone }}</a> | </li>
                            <li><a href="{{ route('login.form') }}"><i class="fa-solid fa-lock"></i> Login</a> / <a href="{{ route('registration') }}">Register</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="px-5" height="60px" src="images/docpoint-logo.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('front.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.about') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.expert') }}">Our Experts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.service') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('front.contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('frontend')

    <section>
        <div id="newsteller" class="bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="newsteller_content">
                            <h3 class="mb-3">Subscribe For Our Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora explicabo consectetur
                                <br> esse labore rem alias praesentium libero facilis nulla hic.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <form action="">
                                <input height="" class="newsteller_form form-control" type="text"
                                    placeholder="Email">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-medium btn-danger" type="submit">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
    </section>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="about_us">
                        <h3 class="text-light mt-5 mb-4 pb-3">About Us</h3>
                        <p class="text-light fw-normal lh-base"> Come and be safe</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about_us">
                        <h3 class="text-light  mt-5 mb-4 pb-3">Quick Links</h3>
                        <ul>
                            <li><a class="text-light" href="{{ route('front.home')}}"> Home </a></li>
                            <li><a class="text-light" href="{{ route('front.blog') }}"> Blog </a></li>
                            <li><a class="text-light" href="{{ route('front.service') }}"> service </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about_us">
                        <h3 class="text-light  mt-5 mb-4 pb-3">Importants Links</h3>
                        <ul>
                            <li><a class="text-light" href="{{ route('front.about') }}"> About us </a></li>
                            <li><a class="text-light" href="#"> Terms and Condition </a></li>
                            <li><a class="text-light" href="#"> Privacy & Policy </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about_us">
                        <h3 class="text-light fw-bold mt-5 mb-4 pb-3">Contact Us</h3>
                 </div>
                    <h6 class="text-light mb-2">Address:</h6>
                    <p class="text-light mb-4">{{ $footer->address }}</p>
                    <h6 class="text-light mb-2">Phone:</h6>
                    <p class="text-light mb-4">{{ $footer->phone }}</p>
                    <h6 class="text-light mb-2">Email:</h6>
                    <p class="text-light mb-4">{{ $footer->email }}</p>
  
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('contents/frontend') }}js/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contents/frontend') }}js/js/custom.js"></script>
</body>

</html>
