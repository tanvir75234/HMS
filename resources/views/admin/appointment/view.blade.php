@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-8 card_title_part">
                        <i class="fab fa-gg-circle"></i>View Appointment Information
                    </div>  
                    <div class="col-md-4 card_button_part">
                        <a href="{{ route('appointment.home') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>View Appointment</a>
                    </div>  
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table class="table table-bordered table-striped table-hover custom_view_table">
                          <tr>
                            <td>Doctor Name</td>  
                            <td>:</td>  
                            <td>{{ $data->doc_name }}</td>  
                          </tr>
                          <tr> 
                          <tr>
                            <td>Patient Name</td>  
                            <td>:</td>  
                            <td>{{ $data->pati_name }}</td>  
                          </tr>
                          
                          <tr>
                            <td> Date</td>  
                            <td>:</td>  
                            <td>{{ $data->date }}</td>  
                          </tr>
                          
                          <tr>
                            <td>Schedule</td>  
                            <td>:</td>  
                            <td>{{ $data->schedule }}</td>  
                          </tr>
                          
                          <tr>
                            <td>Fee</td>  
                            <td>:</td>  
                            <td>{{ $data->fee }}</td>  
                          </tr>
                          
                          <tr>
                            <td>Chamber</td>  
                            <td>:</td>  
                            <td>{{ $data->chamber }}</td>  
                          </tr>
                          
                          <tr>
                            <td>Consultion Type</td>  
                            <td>:</td>  
                            <td>{{ $data->consultation_type }}</td>  
                          </tr>
                          
                          <tr>
                            <td>Appointment</td>  
                            <td>:</td>  
                            <td>{{ $data->appointment_stauts}}</td>  
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