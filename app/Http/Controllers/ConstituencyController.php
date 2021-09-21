<?php

namespace App\Http\Controllers;

use App\Models\Constituency;
use Illuminate\Http\Request;

class ConstituencyController extends Controller
{
   
    /**
     * return constituencies from a given county
     *
     * @param  int  $id
     *
     */
   public function getCons($id){
    $cons = Constituency::where('county_number',$id)->pluck('name','id');
    return json_encode($cons);
   }
   
}