<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    public $table = "order_item";

    protected $attributes = [
        'trash' => 0,
    ];
    protected $fillable = [
        'orderId',
        'phoneId',
        'quantity',
        'priceSale',
        'totalPrice',
        'trash'
    ];
}
