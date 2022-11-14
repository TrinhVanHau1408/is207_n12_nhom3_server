<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $table = "cart";
    protected $attributes = [
        'trash' => 0,
    ];
    protected $fillable = [
        'customerId',
        'totalQuantity',
        'totalMoney',
        'trash',
    ];
}
