<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $tables = "subjects";

    protected $primaryKey = "id";

    protected $fillable = [
        'admin_id',
        'subject_name'
    ];
}