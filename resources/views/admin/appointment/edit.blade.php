@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('appointment.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Add New Appointment
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('appointment.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>Appointment </a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Doctor Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" name="id" value="{{ $data->id }}">
                    <input type="text" class="form-control form_control" id="" name="doc_name" value="{{ $data->doc_name }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Patient Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="pati_name" value="{{ $data->pati_name }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Date<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="date" value="{{ $data->date }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Schedule<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="schedule" value="{{ $data->schedule }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Fee<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="fee" value="{{ $data->fee }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Chamber<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="chamber" value="{{ $data->chanber }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Consultant Type<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="consultation_type" value="{{ $data->consultation_type }}">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Appointment Status<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="appointment_status" value="{{ $data->appointment_status }}">
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