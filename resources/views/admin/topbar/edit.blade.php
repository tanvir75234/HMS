@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('topbar.update') }}">
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Topbar Contact
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>Topbar</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-3 col-form-label col_form_label">Number:</label>
                <div class="col-sm-7">
                  <input type="hidden" name="topbar_id" value="{{ $topbar->topbar_id }}">
                  <input type="text" class="form-control form_control" name="topbar_phone" value="{{ $topbar->topbar_phone }}">
                </div>
              </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    
                    <input type="text" class="form-control form_control" id="" name="topbar_email" value="{{ $topbar->topbar_email }}">
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