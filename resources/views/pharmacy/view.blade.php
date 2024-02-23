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
                            <td>SN</td>  
                            <td>:</td>  
                            <td>{{ $data->id }}</td>  
                          </tr>
                          <tr>
                            <td>Date</td>  
                            <td>:</td>  
                            <td>{{ $data->date }}</td>  
                          </tr>
                          <tr>
                            <td>Patient Name</td>  
                            <td>:</td>  
                            <td>{{ $data->patient_name }}</td>  
                          </tr>
                          <tr>
                            <td>Doctor Name</td>  
                            <td>:</td>  
                            <td>{{ $data->doctor_name }}</td>  
                          </tr>
                          <tr>
                            <td>Total Amount</td>  
                            <td>:</td>  
                            <td>{{ $data->amount }}</td>  
                          </tr>
                          <tr>
                            <td>Discount</td>  
                            <td>:</td>  
                            <td>{{ $data->discount }}</td>  
                          </tr>
                          <tr>
                            <td>Paid Ammount</td>  
                            <td>:</td>  
                            <td>{{ $data->paid_ammount }}</td>  
                          </tr>
                          <tr>
                            <td>Due Amount</td>  
                            <td>:</td>  
                            <td>{{ $data->due_ammount }}</td>  
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