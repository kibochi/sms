<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use App\Models\Exam;
use App\Models\Student;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\FeeRequest;

class FeeController extends Controller
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
        $student = Student::all();
        $fees = Fee::where('admin_id', $user)->get();
        foreach($fees as $fee){
            $total = $fee->sum('amount');
        }
        return view('fee.index', compact('admin', 'school', 'student','fees','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
      
        return view('fee.index', compact('admin', 'school', 'student','fees'));
    }

     public function attachfees(Student $student)
    {
       $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
      
        return view('fee.index', compact('admin', 'school', 'student','fees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeeRequest $request)
    {
        $fee = Fee::create($request->validated());

        return redirect()->back()->with("fees Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        return view('fee.show', compact('admin', 'school','fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(FeeRequest $request, Fee $fee)
    {
       $fee->update($request->validated());

        return redirect()->back()->with("message","fees Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect('/fee')->with("message", 'Fee deleted');
    }
}