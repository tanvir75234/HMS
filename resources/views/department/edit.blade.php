@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('department.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Department Registration
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('department.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Department List</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label"> Doctor Name :<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <input type="text" class="form-control form_control" id="" name="doc_name" value="{{ $data->doc_name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label mb-5">Department Name :</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="department_name" value="{{ $data->department_name }}">
                  </div>
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
            </div>  
          </div>
      </form>
    </div>
    </div>
@endsection                