<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller{

    public function index(){
        $data = Department::all();
        return view ('admin.department.all',compact('data'));
    }

    public function add(){
        return view ('admin.department.add');
    }

    public function view($id){
        $data = Department::where('id',$id)->first();
        return view('admin.department.view',compact('data'));
    }

    public function edit($id){
        $data = Department::where('id',$id)->firstOrFail();
        return view('admin.department.edit',compact('data'));
    }

    public function insert(Request $_request){
        $isnert = Department::insert([
            'doc_name' => $_request['doc_name'],
            'department_name' => $_request['department_name'],
        ]);

        if($isnert){
            return redirect('dashboard/department');
        }
    }

    public function update(Request $_request){
        $id = $_request['id'];

        $update = Department::where('id',$id)->update([
            'doc_name' => $_request['doc_name'],
            'department_name' => $_request['department_name'],
        ]);

        if($update){
            return redirect('dashboard/department');
        }
    }

    public function softdelete($id){
        $data = Department::find($id);
        $data->delete();
        return redirect('dashboard/department');
    }

    
}
