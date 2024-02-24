<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FrontendController extends Controller
{
    public function index(){
        $footer = Footer::where('footer_id',1)->first();
        return view('frontend.home',compact('footer'));
    }

    public function about(){
        return view('frontend.about');
    }

    public function blog(){
        return view('frontend.blog');
    }
    
    public function contact(){
        return view('frontend.contact');
    }

    public function expert(){
        return view('frontend.experts');
    }

    public function service(){
        return view('frontend.service');
    }

}
