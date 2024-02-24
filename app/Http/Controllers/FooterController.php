<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller{
    public function edit(){
        $data = Footer::where('footer_id',1)->first();
        return view('admin.footer.edit',compact('data'));
    }

    public function update(Request $request){
        $id = $request['footer_id'];
        
        $update = Footer::where('footer_id',$id)->update([
            'email' => $request['email'],
            'phone' => $request['phone'],
            'address' => $request['address'],
            'copyrights' => $request['copyrights'],
            'about_us' => $request['about_us'],
        ]);

        if($update){
            return back();
        }
    }
}
