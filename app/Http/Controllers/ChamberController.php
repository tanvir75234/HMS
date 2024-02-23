<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamber;

class ChamberController extends Controller{
    public function index(){
        $data = Chamber::all();
        return view('chamber.all',compact('data'));
    }

    public function add(){
        return view('chamber.add');
    }

    public function view($id){
        $data = Chamber::where('id',$id)->first();
        return view('chamber.view',compact('data'));
    }

    public function edit($id){
        $data = Chamber::where('id',$id)->firstOrFail();
        return view('chamber.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Chamber::insert([
            'chamber_name' => $request['chamber_name'],
            'chamber_address' => $request['chamber_address'],
            'chamber_author' => $request['chamber_author'],
        ]);

        if($insert){
            return redirect('dashboard/chamber');
        }
    }

    public function update(Request $request){
        $id = $request['id'];
        $update = Chamber::where('id',$id)->update([
            'chamber_name' => $request['chamber_name'],
            'chamber_address' => $request['chamber_address'],
            'chamber_author' => $request['chamber_author'],
        ]);

        if($update){
            return redirect('dashboard/chamber');
        }
    }
}
