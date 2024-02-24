@extends('welcome')
@section('frontend')
    <section id="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_content">
                        <h3 class="fw-bold text-light">Contact Us</h3>
                        <p class="fw-medium text-light mt-5">Home | Contact Us</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="mb-5"> 
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="text-black fw-bold mt-5 mb-3">Contact Us</h2>
                    <p class="text-black mb-4">Please fill in the following form to contact us quickly.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact_form mt-4 ">
                                <label for="">Name <span>*</span></label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_form mt-4 mx-3">
                                <label for="">Phone <span>*</span></label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_form mt-4 ">
                                <label for="">Email <span>*</span></label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact_form mt-4 mx-3">
                                <label for="">Subject <span>*</span></label>
                                <input class="form-control" type="text" name="" id="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="contact_form mt-4">
                                <label for="">Subject <span>*</span></label>
                                <textarea class="form-control" name="" id="" ></textarea>
                            </div>
                            <button class="btn btn-medium btn-primary mt-4">SUBMIT</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box bg-danger px-4  pb-2 mt-5 text-center">
                        <h4 class="fw-medium mt-5 mb-4 text-light"><i class="fa-solid fa-phone fs-6"></i> Phone :</h4>
                        <p class="text-light fs-6">123-4587-9856</p>
                        <p class="text-light fs-6">541-8547-9658</p>
                    </div>
                    <div class="box bg-secondary px-4  pb-2 mt-5 text-center">
                        <h4 class="fw-medium mt-5 mb-4 text-light"><i class="fa-solid fa-envelope fs-6"></i> Email :</h4>
                        <p class="text-light fs-6">tanvirgeneralhospital@gmail.com</p>
                        <p class="text-light fs-6">support@hospital.com</p>
                    </div>
                    <div class="box bg-dark px-4  pb-2 mt-5 text-center">
                        <h4 class="fw-medium mt-5 mb-4 text-light"><i class="fa-solid fa-location-dot fs-6"></i> Address :</h4>
                        <p class="text-light fs-6">San Francisco City Hall, San Francisco, San Francisco City Hall CA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection  