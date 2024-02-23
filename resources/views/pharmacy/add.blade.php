@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('pharmacy.submit') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Pharmacy Bill
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('pharmacy.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Pharmacy List</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Date:<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="date" class="form-control form_control" id="" name="date">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Patient Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="patient_name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Doctor Name <span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="doctor_name">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Total Ammount <span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form_control" id="" name="amount">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Discount <span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form_control" id="" name="discount">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Paid Ammount <span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form_control" id="" name="paid_ammount">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Due Ammount <span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control form_control" id="" name="due_ammount">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Prescription Photo <span class="req_star">*</span>:</label>
                  <div class="col-sm-4">
                    <input type="file" class="form-control form_control" id="" name="prescription_photo">
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