@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Popular Blog List
                </div>  
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('popular-blog.add') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Create New</a>
                </div>  
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover custom_table">
              <thead class="table-dark">
                <tr>
                  <th>SN</th>
                  <th>Blog</th>
                  <th>Blog Category</th>
                  <th>Blog Image</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $data as $data )          
                <tr>
                  <td>{{ $data->popular_blog_id }}</td>
                  <td>{{ $data->popular_blog }}</td>
                  <td>{{ $data->popular_blog_category }}</td>
                  <td>{{ $data->popular_blog_image }}</td>
                  <td>
                      <div class="btn-group btn_group_manage" role="group">
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('dashboard/popular/blog/view/'.$data->popular_blog_id) }}">View</a></li>
                          <li><a class="dropdown-item" href="{{ url('dashboard/popular/blog/edit/'.$data->popular_blog_id) }}">Edit</a></li>
                          <form action="{{url('dashboard/blog/softdelete')}}" method="get">
                              @csrf
                              <li><a class="dropdown-item" href="{{ url('dashboard/popular/blog/softdelete/'.$data->blog_id) }}">Delete</a></li>
                          </form>
                        </ul>
                      </div>
                  </td>
                </tr>              
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-footer">
            <div class="btn-group" role="group" aria-label="Button group">
              <button type="button" class="btn btn-sm btn-dark">Print</button>
              <button type="button" class="btn btn-sm btn-secondary">PDF</button>
              <button type="button" class="btn btn-sm btn-dark">Excel</button>
            </div>
          </div>  
        </div>
    </div>
  </div>

@endsection