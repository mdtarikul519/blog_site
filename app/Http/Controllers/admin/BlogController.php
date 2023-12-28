<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
  public function create()
  {
    $blogs = Blog::get();
    return view('admin.blog.create', compact('blogs'));
  }

  public function store(Request $request)
  {
    //dd($request->all());
    $blogs = $this->validate($request, [
      'title' => 'required',
      'short_description' => 'required',
      'description' => 'required',
      'image' => 'required',
      'published' => 'required',
      'slug' => 'required',
    ]);
    //dd($blogs);

    $data = new Blog();

    // dd($request->all());
    $data->title = $request->title;
    $data->short_description = $request->short_description;
    $data->description = $request->description;
    $data->published = $request->published;
    $data->slug = $request->slug;
    if ($request->hasFile('image')) {

      $data->image = Storage::put('/blog_uploads', request()->file('image'));
      // dd($data->image);
    }
    //  if($request->hasFile('photo')){
    //    $data->photo = Storage::put('/user_uploads', request()->file('photo'));
    //    }
    $data->save();

    return redirect()->back()->with('success', 'data inserted sucessfully');
  }

  public function all()
  {
    $alldata = Blog::get();
    return view('admin.blog.index', compact('alldata'));
  }

  public function edit($id)
  {
    $editdata = Blog::find($id);
    return view('admin.blog.edit', compact('editdata'));
  }

  public function update(Request $request, $id)
  {
    $data = Blog::find($id);
    $data->title = $request->title;
    $data->short_description = $request->short_description;
    $data->description = $request->description;
    $data->published = $request->published;
    $data->slug = $request->slug;
    if ($request->hasFile('image')) {
      if (public_path($data->image)) {
        unlink(public_path($data->image));
      }
      $data->image = Storage::put('/blog_uploads', request()->file('image'));
    }
    $data->update();
    return redirect()->route('admin.blog.all')->with('success', 'data update sucessfully');
  }


  public function delete($id)
  {
      $user = Blog::where('id', $id)->first();
      if ($user) {
          if (file_exists(public_path($user->image))) {
              unlink(public_path($user->image));
              $user->delete();
              return redirect()->back();
          } else {
              $user->delete();
              return redirect()->back();
          }
      } else {
          return redirect()->back();
      }
  }

}
