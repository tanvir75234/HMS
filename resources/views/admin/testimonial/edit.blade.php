@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('testimonial.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Testimonial
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>Testimonial Part</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-md-3 col-form-label col_form_label">Service Title:</label>
                <div class="col-sm-7">
                  <input type="hidden" name="testimonial_id" value="{{ $testimonial->testimonial_id }}">
                  <input type="text" class="form-control form_control" name="testimonial_head" value="{{ $testimonial->testimonial_head }}">
                </div>
              </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Service Description<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">             
                    <input type="text" class="form-control form_control" id="" name="testimonial_description" value="{{ $testimonial->testimonial_description }}">
                  </div>
                </div>
            </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Testimonial About<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">             
                    <input type="text" class="form-control form_control" id="" name="testimonial_image_about" value="{{ $testimonial->testimonial_image_about }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Testimonial Doc Description<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">             
                    <input type="text" class="form-control form_control" id="" name="testimonial_image_description" value="{{ $testimonial->testimonial_image_description }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Testimonial Image<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">             
                    <input type="file" class="form-control form_control" id="" name="testimonial_image" value="{{ $testimonial->testimonial_image }}">
                  </div>
                </div>
            </div>
            </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
            </div>  
          </div>
      </form>
    </div>
    </div>
@endsection                