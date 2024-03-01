<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
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

    public function login_form(){
        return view('frontend.login-form');   
    }

    public function registration(){
        return view('frontend.register-form');
    }

}
