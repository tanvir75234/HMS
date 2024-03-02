<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller{
    public function index(){
        $data = Contact::all();
        return view('admin.contact.all',compact('data'));
    }

    public function add(){
        return view('admin.contact.add');
    }

    public function edit($id){
        $data = Contact::where('contact_id',$id)->firstOrFail();
        return view('admin.contact.edit',compact('data'));
    }

    public function insert(Request $request){
        $insert = Contact::insert([
            'contact_name' => $request['contact_name'],
            'contact_email' => $request['contact_email'],
            'contact_phone' => $request['contact_phone'],
            'contact_subject' => $request['contact_subject'],
            'contact_message' => $request['contact_message'],
        ]);

        if($insert){
            return redirect('dashboard/contact');
        }
    }

    public function update(Request $request){
        $id = $request['contact_id'];
        $update = Contact::where('contact_id',$id)->update([
            'contact_name' => $request['contact_name'],
            'contact_email' => $request['contact_email'],
            'contact_phone' => $request['contact_phone'],
            'contact_subject' => $request['contact_subject'],
            'contact_message' => $request['contact_message'],
        ]);

        if($update){
            return redirect('dashboard/contact');
        }

    }    
}
