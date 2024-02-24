@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('social.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Social Link
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>Social</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Facebook<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="social_id" value="{{ $data->social_id }}">
                    <input type="text" class="form-control form_control" id="" name="facebook" value="{{ $data->facebook }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Whatsapp:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="whatsapp" value="{{ $data->whatsapp }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Instagram<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="instagram" value="{{ $data->instagram }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Linkedin<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="linkedin" value="{{ $data->linkedin }}">
                  </div>
                </div> 
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Behance<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="behance" value="{{ $data->behance }}">
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