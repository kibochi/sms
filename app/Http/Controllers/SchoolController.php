<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;
use App\Models\County;
use App\Models\Constituency;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $admin)
    {
        
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
    public function store(StoreSchoolRequest $request)
    {
        $notification = array(
        'message' => 'School profile created!', 
        'alert-type' => 'success'
);
         $validated = $request->validated();

         $school = School::create($validated);
         return redirect('admin')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school , User $admin)
    {
        $user = auth()->user()->id;
         $school = School::with(['user'])->where('admin_id', $user)->first();
        return view('school.index',compact('school','admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        $counties = County::all(); 
        $constituency = Constituency::all(); 
         $user = auth()->user()->id;
         $school = School::with(['user'])->where('admin_id', $user)->first();
          $admin= User::with(['schools'])->where('id', $user)->first();
        return view('school.edit',compact('school','admin','counties','constituency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(StoreSchoolRequest $request, School $school)
    {
         $notification = array(
        'message' => 'profile created!', 
        'alert-type' => 'success'
        );
         $validated = $request->validated();

         $school->update($validated);
         
         return redirect('admin')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}