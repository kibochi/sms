<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = 'schools';

    protected $primaryKey = 'id';
    
    protected $fillable =
     [
        'admin_id',
        'school_name',
        'prefix_name',
        'email',
        'phone',
        'address',
        'county',
        'constituency',


     ];


       public function user(){
        return $this->belongsTo(User::class ,'admin_id' ,'id');
     }
}