<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller{

    public function index(){
        $data = Staff::all();
        return view('staff.all',compact('data'));
    }

    public function add(){
        return view('staff.add');
    }

    public function view($id){
        $data = Staff::where('id',$id)->first();
        return view('staff.view',compact('data'));
    }

    public function edit($id){
        $data = Staff::where('id',$id)->firstOrFail();
        return view('staff.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Staff::insert([
            'staff_name' => $request['staff_name'],
            'staff_phone' => $request['staff_phone'],
            'staff_email' => $request['staff_email'],
            'staff_author' => $request['staff_author'],
        ]);

        if($insert){
            return redirect('dashboard/staff');
        }
    }

    public function update(Request $request){
        $id = $request['id'];

        $update = Staff::where('id',$id)->update([
            'staff_name' => $request['staff_name'],
            'staff_phone' => $request['staff_phone'],
            'staff_email' => $request['staff_email'],
            'staff_author' => $request['staff_author'],
        ]);

        if($update){
            return redirect('dashboard/staff');
        }
    }
}
