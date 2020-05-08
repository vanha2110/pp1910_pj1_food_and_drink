<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = [
        'order_id', 
        'purchase_method',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
