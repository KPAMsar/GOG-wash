<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gogpoint extends Model
{
    use HasFactory;
    protected $table = 'gogpoint';
    protected $fillable = [
        'request_id',
        'firstname',
        'lastname',
        'email',
        'status',
        'phone',
        'bank_name',
        'account_no',
        'amount',
    ];

}
