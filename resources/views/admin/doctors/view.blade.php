@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>View User Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="all-user.html" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All User</a>
                    </div>  
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                          <tr>
                            <td>Name</td>  
                            <td>:</td>  
                            <td>{{ $data->name }}</td>  
                          </tr>
                          <tr>
                            <td>Phone</td>  
                            <td>:</td>  
                            <td>{{ $data->phone }}</td>  
                          </tr>
                          <tr>
                            <td>Email</td>  
                            <td>:</td>  
                            <td>{{ $data->email }}</td>  
                          </tr>
                          <tr>
                            <td>Total Appointment</td>  
                            <td>:</td>  
                            <td>{{ $data->total_appointment }}</td>  
                          </tr>
                          <tr>
                            <td>Total Staff</td>  
                            <td>:</td>  
                            <td>{{ $data->total_staff }}</td>  
                          </tr>

                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
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