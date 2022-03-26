<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='cart';

    protected $fillable = [
        'email',
        'item_id',
        'item_qty',
    ];
    public function laundry(){
        return $this->belongsTo(laundry::class, 'price','items');
    }
}
