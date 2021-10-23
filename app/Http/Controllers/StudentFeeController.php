<?php

namespace App\Http\Controllers;

use App\Models\StudentFee;
use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use App\Http\Requests\StudentFeeRequest;

class StudentFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(StudentFeeRequest $request)
    {
       $fee = StudentFee::create($request->validated());

       return redirect()->back()->with("message","fees Attached");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentFee  $studentFee
     * @return \Illuminate\Http\Response
     */
    public function show(StudentFee $fee)
    {
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $fee = StudentFee::all();
        return view('student.fees_show', compact('admin', 'fee'));
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentFee  $studentFee
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentFee $studentFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentFee  $studentFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentFee $fee)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentFee  $studentFee
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentFee $studentFee)
    {
        //
    }
}