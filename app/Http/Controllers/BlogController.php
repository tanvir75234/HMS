<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller{
    public function index(){
        $data = Blog::all();
        return view('admin.blog.all',compact('data'));
    }

    public function add(){
        return view('admin.blog.add');
    }

    public function edit($id){
        $data = Blog::where('blog_id',$id)->firstOrFail();
        return view('admin.blog.edit',compact('data'));
    }

    public function view($id){
        $data = Blog::where('blog_id',$id)->first();
        return view('admin.blog.view',compact('data'));
    }

    public function insert(Request $request){
        $insert = Blog::insert([
            'blog_title' => $request['blog_title'],
            'blog_category' => $request['blog_category'],
            'blog_image' => $request['blog_image'],
        ]);

        if($insert){
            return back();
        }
    }

    public function update(Request $request){
        $id = $request['blog_id'];
        $update = Blog::where('blog_id',$id)->update([
            'blog_title' => $request['blog_title'],
            'blog_category' => $request['blog_category'],
            'blog_image' => $request['blog_image'],
        ]);

        if($update){
            return redirect('dashboard/blog');
        }
    }

    public function softdelete($id){
        $data = Blog::find('blog_id',$id);
        $data->delete();
        return back();
    }
}
