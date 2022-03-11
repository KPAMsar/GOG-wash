<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundry extends Model
{
    protected $table = "laundry_items";
    use HasFactory;
    protected $fillable =[
        'item',
        'price',
        'express_laundry'

    ];
    public function calculations(){

    }
}
