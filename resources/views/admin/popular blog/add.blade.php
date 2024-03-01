@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12 ">
      <form method="post" action="{{ route('popular-blog.submit') }}" enctype='multipart/form-data'>
        @csrf
          <div class="card mb-3">
            <div class="card-header">
              <div class="row">
                  <div class="col-md-8 card_title_part">
                      <i class="fab fa-gg-circle"></i>Add Popular Blogs
                  </div>  
                  <div class="col-md-4 card_button_part">
                      <a href="{{ route('popular-blog.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Popular Blogs</a>
                  </div>  
              </div>
            </div>
            <div class="card-body">
            <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Blog <span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="popular_blog">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Blog Category<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" id="" name="popular_blog_category">
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-3 col-form-label col_form_label">Blog Image<span class="req_star">*</span>:</label>
                  <div class="col-sm-7">
                    <input type="file" class="form-control form_control" id="" name="popular_blog_image">
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