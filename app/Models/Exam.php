<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Exam extends Model
{
    use HasFactory;

    protected $table ="exams";
    protected $primaryKey = "id";

    protected $fillable = [
        'admin_id',
        'student_id',
        'subject_name',
        'marks'
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

  
}