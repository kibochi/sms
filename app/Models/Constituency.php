<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituency extends Model
{
    use HasFactory;

       protected $table = "constituencies";
       protected $primaryKey = "id";


    public function county(){
      return $this->belongsTo(County::class);
}
}