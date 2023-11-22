<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\UserRoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');


Route::group(['prefix'=>'user-role'], function(){
  Route::get('/create', [UserRoleController::class, 'create'])->name('admin.user_role.create');
  Route::post('/store', [UserRoleController::class, 'store'])->name('admin.user_role.store');
});

Route::group(['prefix'=>'user'], function(){
    Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
});


// Route::get('item', function(){
//   dd(session());
// });