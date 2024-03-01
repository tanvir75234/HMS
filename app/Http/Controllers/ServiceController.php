<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function edit(){
        $service = Service::where('service_id',1)->first();
        return view('admin.service.edit',compact('service'));
    }

    public function update(Request $request){
        $update = Service::where('service_id',1)->update([
            'service_title' => $request['service_title'],
            'service_icon' => $request['service_icon'],
            'service_description' => $request['service_description'],
        ]);

        if($update){
            return redirect('admin/dashboard/service');
        }
    }
}
