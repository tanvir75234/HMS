<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller{
    public function edit(){
        $testimonial = Testimonial::where('testimonial_id',1)->first();
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    public function update(Request $request){
        $update = Testimonial::where('testimonial_id',1)->update([
            'testimonial_head' => $request['testimonial_head'],
            'testimonial_description' => $request['testimonial_description'],
            'testimonial_image' => $request['testimonial_image'],
            'testimonial_image_about' => $request['testimonial_image_about'],
            'testimonial_image_description' => $request['testimonial_image_description'],
        ]);

        if($update){
            return redirect('admin/dashboard/testimonial');
        }
    }
}
