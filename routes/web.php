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
use App\Http\Controllers\StudentFeeController;
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

 

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');




Route::middleware(['auth', 'is_admin', 'verified'])->group(function () {
      Route::get('/', [AdminController::class, 'index']);
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
      Route::resource('/studentfee', StudentFeeController::class);
      Route::get('/results/{student}', [StudentController::class, 'results'])->name('results.create');
      Route::get('/fees_structure', [FeeController::class, 'index'])->name('fee.index');
      Route::get('/student_fees/{student}', [StudentController::class, 'attachfees'])->name('student.fees');
      Route::get('/studentfees/{fee}', [StudentController::class, 'showfees'])->name('student_fees.show');
      Route::post('/studentfees/{fee}', [StudentFeeController::class, 'update'])->name('studentfees.update');
    

     
    
    
  
    

});