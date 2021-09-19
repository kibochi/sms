<?php

namespace App\Http\Middleware;

use App\Models\School;
use Closure;
use Illuminate\Http\Request;

class checkSetup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user =auth()->user()->id;
        $school = School::where('admin_id' , $user)->get();
        if($school->count()){
           
          return redirect()->route('school.index');
        }
        return $next($request);
    }
}