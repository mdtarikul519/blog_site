<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
   public function create(){
          return view('admin.user.create');
   }

   public function store(Request $request){
      
      $this->validate($request,[
         'name' => 'required',
         'email' => 'required',
         'phone_number' => 'required',
         'password' => 'required',
         'image' => 'required',
     ]); 

    $data = new User();
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone_number = $request->phone_number;
    $data->password = $request->password;

    if($request->hasFile('image')){
      $data->image = Storage::put('/user_uploads', $request->file('image'));
    }

    $data->save();

   return redirect()->back()->with('success', 'data inserted sucessfully');

   }
}
