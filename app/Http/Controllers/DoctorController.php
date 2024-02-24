<?php

namespace App\Http\Controllers;

use App\Models\Doctors;
use Illuminate\Http\Request;

class DoctorController extends Controller{

    public function index(){
        $data = Doctors::all();
        return view('admin.doctors.all',compact('data'));
    }

    public function add(){
        return view('admin.doctors.add');
    }

    public function view($id){
        $data = Doctors::where('id',$id)->first();
        return view('admin.doctors.view',compact('data'));
    }

    public function edit($id){
        $data = Doctors::where('id',$id)->firstOrFail();
        return view('admin.doctors.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Doctors::insert([
            'name' =>$request['name'],
            'phone' =>$request['phone'],
            'email' =>$request['email'],
            'total_appointment' =>$request['total_appointment'],
            'total_staff' =>$request['total_staff'],
        ]);

        if($insert){
            return redirect('dashboard/doctor');
        }
    }

    public function update(Request $request){
        $id = $request['id'];

        $update = Doctors::where('id',$id)->update([
            'name' =>$request['name'],
            'phone' =>$request['phone'],
            'email' =>$request['email'],
            'total_appointment' =>$request['total_appointment'],
            'total_staff' =>$request['total_staff'],
        ]);

        if($update){
            return redirect('dashboard/doctor');
        }
    }


    public function softdelete($id){
        $data = Doctors::find($id);
        $data->delete();
        return redirect('dashboard/doctor');
    }

}
