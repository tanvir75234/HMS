@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('service.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Service
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>SerVice Part</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-md-3 col-form-label col_form_label">Service Title:</label>
                <div class="col-sm-7">
                  <input type="hidden" name="service_id" value="{{ $service->service_id }}">
                  <input type="text" class="form-control form_control" name="service_title" value="{{ $service->service_title }}">
                </div>
              </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Service Description<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">             
                    <input type="text" class="form-control form_control" id="" name="service_description" value="{{ $service->service_description }}">
                  </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Service Icon:</label>
                <div class="col-sm-7">
                  <input type="file" class="form-control form_control" name="service_icon" value="{{ $service->service_icon }}">
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