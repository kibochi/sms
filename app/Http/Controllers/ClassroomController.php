<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\User;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClassroomRequest;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Classroom $classroom)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $student = Student::where('admin_id', $user)->get();
        $classroom = Classroom::where('admin_id', $user)->get();
        return view('classroom.index', compact('admin', 'classroom','student'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Classroom $classroom)
    {
        
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);

     
        return view('classroom.index', compact('admin', 'classroom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassroomRequest $request)
    {
        $classroom = Classroom::create($request->validated());
         return redirect()->back()->with('message', 'class created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        
        return view('classroom.show', compact('admin','classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClassroomRequest $request, Classroom $classroom)
    {
        $classroom->update($request->validated());
         return redirect()->back()->with('message', 'classroom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        
    }
}