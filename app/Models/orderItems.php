<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderItems extends Model
{
    use HasFactory;
    protected $table = "order_items";
    protected $fillable = [
        'email',
        'request_id',
        'item_id',
        'price',
        'item_qty',
    ];
    public function laundry(){
        return $this->belongsTo(laundry::class, 'item_id','item');
    }
}
