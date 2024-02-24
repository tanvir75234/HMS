@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('chamber.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Add Chamber
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('chamber.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Chamber List</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" name="id" value="{{ $data->id }}">
                    <input type="text" class="form-control form_control" id="" name="chamber_name" value="{{ $data->chamber_name }}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Address:</label>
                  <div class="col-sm-7">
                    <textarea type="text" class="form-control form_control" id="" name="chamber_address">{{ $data->chamber_address }}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Author<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="chamber_author" value="{{ $data->chamber_author }}">
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