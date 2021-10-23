<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $tables = "fees";
    protected $primaryKey = "id";

    protected $fillable = [
        'admin_id',
        'fee_name',
        'amount',
        'duration',
    ];

    // public function getAmountAttribute(){
    //     return $this->attributes['amount'] /100;
    // }


    //  public function setPriceAttribute($val){
    //     $this->attributes['amount'] = $val * 100;
    // }

  
}