<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\School;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $user = auth()->user()->id;
        $admin = User::with(['schools'])->findOrFail($user);
        $school = School::with(['user'])->where('admin_id', $user)->first();
        return view('admin.index', compact('admin','school'));
    }
}