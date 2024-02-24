<?php

namespace App\Http\Controllers;

use App\Models\UserList;
use Illuminate\Http\Request;


class UserController extends Controller{

    public function index(){
        $data = UserList::all();
        return view ('admin.user.all',compact('data'));
    }

    public function add(){
        return view ('admin.user.add');
    }

    public function view($id){
        $data = UserList::where('user_status',1)->where('id',$id)->first();
        return view('admin.user.view',compact('data'));
    }

    public function insert(REQUEST $request ) {
        $insert = UserList::insert([
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'photo' => $request['photo'],
        ]) ;

        if($insert){
            return redirect('dashboard/user');
        }
    }

   public function edit($id){
        $data = UserList::where('id',$id)->firstOrFail();
        return view('admin.user.edit',compact('data'));
   }

    public function update(Request $request){
        $id = $request['id'];

        $update = UserList::where('id',$id)->update([
            'name' =>$request['name'],
            'phone' =>$request['phone'],
            'email' =>$request['email'],
            'photo' =>$request['photo'],
        ]);

        if($update){
            return redirect('dashboard/user');
        }
    }

    public function softdelete($id){
        $data = UserList::find($id);
        $data->delete();
        return redirect('dashboard/user');
    }
    
}
