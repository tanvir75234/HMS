<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller{
    public function index(){
        $data = Appointment::all();
        return view('admin.appointment.all',compact('data'));
    }

    public function add(){
        return view('admin.appointment.add');
    }

    public function view($id){
        $data = Appointment::where('id',$id)->first();
        return view('admin.appointment.view',compact('data'));
    }

    public function edit($id){
        $data = Appointment::where('id',$id)->first();
        return view('admin.appointment.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Appointment::insert([
            'doc_name' => $request['doc_name'],
            'pati_name' => $request['pati_name'],
            'date' => $request['date'],
            'schedule' => $request['schedule'],
            'fee' => $request['fee'],
            'chamber' => $request['chamber'],
            'consultation_type' => $request['consultation_type'],
            'appointment_status' => $request['appointment_status'],
        ]);

        if($insert) {
            return redirect('dashboard/appointment');
        }
    }

    public function update(Request $request){
        $id = $request['id'];
        $update = Appointment::where('id',$id)->update([
            'doc_name' => $request['doc_name'],
            'pati_name' => $request['pati_name'],
            'date' => $request['date'],
            'schedule' => $request['schedule'],
            'fee' => $request['fee'],
            'chamber' => $request['chamber'],
            'consultation_type' => $request['consultation_type'],
            'appointment_status' => $request['appointment_status'],
        ]);

        if($update) {
            return redirect('dashboard/appointment');
        }
    }
}   
