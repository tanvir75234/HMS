<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topbar;

class TopbarController extends Controller{
    public function edit(){
        $topbar = Topbar::where('topbar_id',1)->first();
        return view('admin.topbar.edit',compact('topbar'));
    }

    public function update(Request $request){
        $update = Topbar::where('topbar_id',1)->update([
            'topbar_phone' => $request['topbar_phone'],
            'topbar_email' => $request['topbar_email'],
        ]);

        if($update){
            return redirect('admin/dashboard/topbar');
        }
    }
}   
