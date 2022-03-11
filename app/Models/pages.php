<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class pages extends Model
{
    use HasFactory,HasApiTokens;
    protected $table = 'pages';
    protected $fillable =[
        'name',
        'email',
        'username',
        'password'
    ];
}
