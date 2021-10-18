<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use App\Models\School;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Fee;
use App\Models\StudentFee;
use App\Models\Classroom;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        $student = Student::where('admin_id', $user)->get();
        $subject = Subject::where('admin_id', $user)->get();
        $classrooms = Classroom::where('admin_id', $user)->get();
        $fees = StudentFee::with('student')->get();
        $schoolfees = Fee::where('admin_id', $user)->get();
    
        return view('admin.index', compact('admin','school','student','classrooms','schoolfees','fees',
        'subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $admin)
    {
        $user = auth()->user()->id;
         $school = School::with(['user'])->where('admin_id', $user)->first();
         
         $admin= User::with(['schools'])->where('id', $user)->first();

         return view('admin.show',compact('admin', 'school'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin)
    {
         $user = auth()->user()->id;
         $school = School::with(['user'])->where('admin_id', $user)->first();
        return view('admin.edit',compact('admin','school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest  $request, User $admin)
    {
        
         $admin->update($validated = $request->validated());
         
         return redirect('/admin/'.$admin->id)->with('message','profile update success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $admin)
    {
        $admin->delete();
        return redirect('/');
    }
}