<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ConstituencyController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StaffController;
use App\Models\Constituency;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(["verify" => true]);

Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::middleware(['auth', 'is_admin', 'verified'])->group(function () {
     Route::resource('/staff', StaffController::class);
    //   Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
      Route::get('/getCons/{id}', [ConstituencyController::class, 'getCons']);
      Route::get('/admin/{admin}', [AdminController::class, 'show'])->name('admin.show');
      Route::resource('/admin', AdminController::class);
        Route::resource('/school', SchoolController::class);
    
    
     Route::resource('/setup', SetupController::class);

     
    
    
  
    

});