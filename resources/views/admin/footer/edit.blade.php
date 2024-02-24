@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('footer.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Doctor Registration
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>Footer</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="footer_id" value="{{ $data->footer_id }}">
                    <input type="email" class="form-control form_control" id="" name="email" value="{{ $data->email }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="phone" value="{{ $data->phone }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="address" value="{{ $data->address }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Copyrights<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="copyrights" value="{{ $data->copyrights }}">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">About Us<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="about_us" value="{{ $data->about_us }}">
                  </div>
                </div>
            </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
            </div>  
          </div>
      </form>
    </div>
    </div>
@endsection                