<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    
    public $table = "cart_item";

    protected $attributes = [
        'trash' => 0,
    ];

    protected $fillable = [
        'cartId',
        'phoneId',
        'quantity',
        'totalMoney',
        'trash',
    ];
}
