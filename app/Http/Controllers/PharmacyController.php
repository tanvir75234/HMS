<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmacyController extends Controller{

    public function index(){
        $data = Pharmacy::all();
        return view('pharmacy.all',compact('data'));
    }

    public function add(){
        return view('pharmacy.add');
    }

    public function view($id){
        $data = Pharmacy::where('id',$id)->first();
        return view('pharmacy.view',compact('data'));
    }

    public function edit($id){
        $data = Pharmacy::where('id',$id)->firstOrFail();
        return view('pharmacy.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Pharmacy::insert([
            'date' => $request['date'],
            'patient_name' => $request['patient_name'],
            'doctor_name' => $request['doctor_name'],
            'amount' => $request['amount'],
            'discount' => $request['discount'],
            'paid_amount' => $request['paid_amount'],
            'due_amount' => $request['due_amount'],
            'prescription_photo' => $request['prescription_photo'],
        ]);

        if($insert){
            return redirect('dashboard/pharmacy');
        }
    }

    public function update(Request $request){
        $id = $request['id'];

        $update = Pharmacy::where('id',$id)->update([
            'date' => $request['date'],
            'patient_name' => $request['patient_name'],
            'doctor_name' => $request['doctor_name'],
            'amount' => $request['amount'],
            'discount' => $request['discount'],
            'paid_amount' => $request['paid_amount'],
            'due_amount' => $request['due_amount'],
            'prescription_photo' => $request['prescription_photo'],
        ]);

        if($update){
            return redirect('dashboard/pharmacy');
        }
    }
}
