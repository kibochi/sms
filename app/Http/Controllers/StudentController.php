<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\School;
use App\Models\User;
use App\Models\Classroom;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudentRequest;
use Intervention\Image\Facades\Image;


class StudentController extends Controller
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
        return view('student.index', compact('admin', 'school', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Student $student)
    {
        
         
        
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        $classroom = Classroom::all();
        $student_id = $this->studentID();
        
        
        return view('student.create', compact('admin', 'school', 'student', 'classroom', 'student_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
         
        $student=Student::create($validate = $request->validated());
        $this->profileUpload($student);
        return redirect()->back()->with('message', 'student added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        
        return view('student.show', compact('admin', 'school','student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        $classroom = Classroom::all();
        return view('student.edit', compact('admin', 'school','student','classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStudentRequest $request, Student $student)
    {
       $student->update($validate = $request->validated());
       $this->profileUpload($student);
        return redirect()->back()->with('message', 'student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
       $student->delete();
       return redirect('/student')->with("message","student deleted successfuly");
    }

    private function studentID(){
        $user = auth()->user()->id;
        $school = School::with(['user'])->where('admin_id', $user)->first();
        $student = student::where('admin_id',$user)->get();
        $prefix_name = $school->prefix_name;
        $new =  $student->count() + 1;   
        $student_id = $prefix_name . "/" . $new . "/" . date('Y');
        return $student_id;



    }
    private function profileUpload($student){
            if( request()->hasFile('student_profile')) {
                $student->update([
                        'student_profile'=> request()->student_profile->store('profiles/students', 'public'),

                 ]);
                         $profile = Image::make(public_path('storage/' . $student->student_profile))->resize(300,300);
                         $profile->save();

                



            }
    }
      


    
}