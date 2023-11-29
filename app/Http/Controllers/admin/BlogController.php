<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function create(){
        $blogs= Blog::get();
            return view('admin.blog.create',compact('blogs'));
     }
  
     public function store(Request $request){
        //dd($request->all());
        $blogs = $this->validate($request,[
           'title' => 'required',
           'short_description' => 'required',
           'description' => 'required',
           'image' => 'required',
           'published' => 'required',
          //  'slug' => 'required',
       ]); 
       //dd($blogs);
  
      $data = new Blog();

     // dd($request->all());
      $data->title = $request->title;
      $data->short_description = $request->short_description;
      $data->description = $request->description;
      $data->published = $request->published;
      // $data->slug = $request->slug;
      if($request->hasFile('image')){
        $data->image =Storage::put('/blog_uploads', request()->file('image'));
      }
     //  if($request->hasFile('photo')){
     //    $data->photo = Storage::put('/user_uploads', request()->file('photo'));
     //    }
      $data->save();
  
     return redirect()->back()->with('success', 'data inserted sucessfully');
  
     }
  
     public function all(){
        $alldata = Blog::get();
  
        return view('admin.user.index', compact('alldata'));
  
     }
}
