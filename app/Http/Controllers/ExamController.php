<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Student;
use App\Models\School;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\StoreExamRequest;

class ExamController extends Controller
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
        $subjects = Subject::all();
        $student = Student::all();
        return view('exam.index', compact('admin',  'student','subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student)
    {
       
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
       
        $subjects = Subject::all();
        return view('student.results', compact('admin', 'student','subjects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request, Student $student)
    {
         $exam=Exam::create($request->validated());
         return redirect()->back()->with('message',"students results added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        $student = Exam::with('student')->get();
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
      
        $subjects = Subject::all();
        return view('exam.show', compact('admin', 'student','subjects','exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(StoreExamRequest $request, Exam $exam)
    {
         $exam->update($request->validated());
         return redirect()->back()->with('message',"students results added");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}