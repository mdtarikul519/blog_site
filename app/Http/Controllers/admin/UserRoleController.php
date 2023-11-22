<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function create(){
        return view('admin.userRole.create');
    }

    public function store(Request $request){

         $this->validate($request,[
             'title' => 'required',
             'serial' => 'required',
         ]);

         $data = new UserRole();

         $data->title = $request->title;
         $data->serial = $request->serial;
         $data->save();
    }
}
