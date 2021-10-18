<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class StudentFee extends Model
{
    use HasFactory;

    protected $tables = "student_fees";
    protected $primaryKey = "id";

    protected $fillable = [
        'admin_id',
        'student_id',
        'amount',
     
    ];

    /**
     * Get the user that owns the StudentFee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}