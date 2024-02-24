@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Appointment History
                </div>  
                <div class="col-md-4 card_button_part">
                    <a href="{{ route('appointment.add') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Create New Appointment</a>
                </div>  
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover custom_table">
              <thead class="table-dark">
                <tr>
                  <th>SN</th>
                  <th>Doctor Name</th>
                  <th>Patient Name</th>
                  <th>Date</th>
                  <th>Schedule</th>
                  <th>Fee</th>
                  <th>Chamber</th>
                  <th>Consultant Type</th>
                  <th>Status</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $data as $data )          
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->doc_name }}</td>
                  <td>{{ $data->pati_name }}</td>
                  <td>{{ $data->date }}</td>
                  <td>{{ $data->schedule }}</td>
                  <td>{{ $data->fee }}</td>
                  <td>{{ $data->chamber }}</td>
                  <td>{{ $data->consultation_type }}</td>
                  <td>{{ $data->appointment_status }}</td>
                  <td>
                      <div class="btn-group btn_group_manage" role="group">
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('dashboard/appointment/view/'.$data->id) }}">View</a></li>
                          <li><a class="dropdown-item" href="{{ url('dashboard/appointment/edit/'.$data->id) }}">Edit</a></li>
                          <form action="{{url('dashboard/appointment/softdelete')}}" method="get">
                              @csrf
                              <li><a class="dropdown-item" href="{{ url('dashboard/appointment/softdelete/'.$data->id) }}">Delete</a></li>
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