<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    public function edit(){
        $data = Social::where('social_id',1)->first();
        return view('admin.social.edit',compact('data'));
    }

    public function update(Request $request){
        $id = $request['social_id'];
        
        $update = Social::where('social_id',$id)->update([
            'facebook' => $request['facebook'],
            'instagram' => $request['instagram'],
            'whatsapp' => $request['whatsapp'],
            'linkedin' => $request['linkedin'],
            'behance' => $request['behance'],
        ]);

        if($update){
            return back();
        }
    }
}
