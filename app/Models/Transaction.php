<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_id',
        'total_price',
        'item_details',
        'customer_details',
        'snap_token',
        'transaction_status',
        'delivery_status',
    ];

    protected $casts = [
        'transaction_details' => 'array',
        'item_details' => 'array',
    ];
}
