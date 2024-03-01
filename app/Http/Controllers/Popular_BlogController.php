<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popular_blog;

class Popular_BlogController extends Controller{
    public function index(){
        $data = Popular_blog::all();
        return view('admin.popular blog.all',compact('data'));
    }

    public function add(){
        return view('admin.popular blog.add');
    }

    public function edit($id){
        $data = Popular_blog::where('popular_blog_id',$id)->firstOrFail();
        return view('admin.popular blog.edit',compact('data'));
    }

    public function view($id){
        $data = Popular_blog::where('popular_blog_id',$id)->first();
        return view('admin.popular blog.view',compact('data'));
    }

    public function insert(Request $request){
        $insert = Popular_blog::insert([
            'popular_blog' => $request['popular_blog'],
            'popular_blog_category' => $request['popular_blog_category'],
            'popular_blog_image' => $request['popular_blog_image'],
        ]);

        if($insert){
            return back();
        }
    }

    public function update(Request $request){
        $id = $request['popular_blog_id'];

        $update = Popular_blog::where('popular_blog_id',$id)->update([
            'popular_blog' => $request['popular_blog'],
            'popular_blog_category' => $request['popular_blog_category'],
            'popular_blog_image' => $request['popular_blog_image'],
        ]);

        if($update){
            return back();
        }
    }

    public function softdelete($id){
        $data = Popular_blog::find('blog_id',$id);
        $data->delete();
        return back();
    }
}
