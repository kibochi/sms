<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Student;

class Classroom extends Model
{
    use HasFactory;

    protected $table = "classrooms";
    protected $primaryKey = "id";

    protected $fillable = [
        "admin_id",
        "classname"
    ];


    public function students(){
        return $this->hasMany(Student::class);
    }
    
}