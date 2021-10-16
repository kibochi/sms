<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\SetupController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\ExamController;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');




Route::middleware(['auth', 'is_admin', 'verified'])->group(function () {
  
      Route::resource('/staff', StaffController::class);
      Route::get('/admin/{admin}', [AdminController::class, 'show'])->name('admin.show');
      Route::resource('/admin', AdminController::class);
      Route::resource('/school', SchoolController::class);
      Route::resource('/setup', SetupController::class);
      Route::resource('/classroom', ClassroomController::class);
      Route::resource('/student', StudentController::class);
      Route::resource('/subject', SubjectController::class);
      Route::resource('/fee', FeeController::class);
      Route::resource('/exam', ExamController::class);
      Route::get('/results/{student}', [StudentController::class, 'results'])->name('results.create');
    

     
    
    
  
    

});