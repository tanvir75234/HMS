@extends('layouts.master')
@section('content')
  <div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
          <div class="card-header">
            <div class="row">
                <div class="col-md-8 card_title_part">
                    <i class="fab fa-gg-circle"></i>All Pharmacy Bills
                </div>  
                <div class="col-md-4 card_button_part">
                    <a href="{{ url('dashboard/pharmacy/add') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add New List</a>
                </div>  
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-hover custom_table">
              <thead class="table-dark">
                <tr>
                  <th>SN</th>
                  <th>Date</th>
                  <th>Patient Name</th>
                  <th>Doctor Name</th>
                  <th>Ammount</th>
                  <th>Discount</th>
                  <th>Paid Ammount</th>
                  <th>Due Ammount</th>
                  <th>Prescription Photo</th>
                  <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $data as $data )          
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->date }}</td>
                  <td>{{ $data->patient_name }}</td>
                  <td>{{ $data->doctor_name }}</td>
                  <td>{{ $data->ammount }}</td>
                  <td>{{ $data->discount}}</td>
                  <td>{{ $data->paid_ammount }}</td>
                  <td>{{ $data->due_ammount }}</td>
                  <td>{{ $data->prescription_photo }}</td>
                  <td>
                      <div class="btn-group btn_group_manage" role="group">
                        <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('dashboard/pharmacy/view/'.$data->id) }}">View</a></li>
                          <li><a class="dropdown-item" href="{{ url('dashboard/pharmacy/edit/'.$data->id) }}">Edit</a></li>
                          <form action="{{url('dashboard/pharmacy/softdelete')}}" method="get">
                            @csrf
                            <li><a class="dropdown-item" href="{{ url('dashboard/pharmacy/softdelete/'.$data->id) }}">Delete</a></li>
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