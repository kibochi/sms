<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSchoolRequest;

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
    
         $school = School::create($validated = $request->validated());
         return redirect('admin')->with('message','school created successfully');
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
        
         $user = auth()->user()->id;
         $school = School::with(['user'])->where('admin_id', $user)->first();
          $admin= User::with(['schools'])->where('id', $user)->first();
        return view('school.edit',compact('school','admin'));
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
         $admin = auth()->user()->id;
         $school->update($validated = $request->validated());
         return redirect('/admin/'.$admin)->with('message', 'profile update success');
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