<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class debited extends Model
{
    use HasFactory;
    protected $table ='debit_point';
    protected $fillable = [
        'email',
        'points',
    ];
}
