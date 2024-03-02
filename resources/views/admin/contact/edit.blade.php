@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('contact.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Contact Information
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('contact.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Contact List</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label"> Name :<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="contact_id" value="{{ $data->contact_id }}">
                    <input type="text" class="form-control form_control" id="" name="contact_name" value="{{ $data->contact_name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label mb-5">Email :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="contact_email" value="{{ $data->contact_email }}">
                  </div>
                  <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label mb-5">Phone :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="contact_phone" value="{{ $data->contact_phone }}">
                  </div>
                  <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label mb-5">Subject :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="contact_subject" value="{{ $data->contact_subject }}">
                  </div>
                   <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label mb-5">Message :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="contact_message" value="{{ $data->contact_message }}">
                  </div>
                  
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
            </div>  
          </div>
      </form>
    </div>
    </div>
@endsection                