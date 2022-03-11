<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laundry_request extends Model
{
    use HasFactory;
    protected $table='request';
    protected $fillable=[
        'request_id',
        'firstname',
        'lastname',
        'email',
        'status',
        'phone',
        'items  ',

    ];
}
