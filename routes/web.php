<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\UserController;

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
  
   
    Route::get('/setup', [SetupController::class, 'create'])->name('setup.create');
     Route::get('/school', [SchoolController::class, 'index'])->name('school.index');
   
  
    Route::post('/school', [SchoolController::class, 'store'])->name('school.store');
     Route::get('/school/show/{school}', [SchoolController::class, 'show'])->name('school.show');
    Route::get('/school/edit/{school}', [SchoolController::class, 'edit'])->name('school.edit');
    Route::delete('/school/{school}', [SchoolController::class, 'destroy'])->name('school.destroy');
    Route::get('/school/{id}', [UserController::class, 'show'])->name('user.show');

   

    

});