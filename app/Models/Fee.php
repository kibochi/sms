<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $tables = "fees";
    protected $primaryKey = "id";

    protected $fillables = [
        'admin_id',
        'fees_name',
        'amount',
    ];
}