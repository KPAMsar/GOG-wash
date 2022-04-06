<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = [
        'laundry_request_id',
        'email',
        'firstname',
        'lastname',
        'phone',
        'amount',
        'mode_of_payment',
        'payment_staus',
        'reference_no',
   ];
}
