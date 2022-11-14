<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    // $table->id();
    // $table->unsignedBigInteger('cartId');
    // $table->foreign('cartId')->references('id')->on('cart')->onDelete('cascade');
    // $table->unsignedBigInteger('phoneId');
    // $table->foreign('phoneId')->references('id')->on('phone')->onDelete('cascade');
    // $table->integer('quantity');
    // $table->decimal('totalMoney',15,2);
    // $table->integer('trash');
    // $table->timestamps();
    public $table = "cart_item";
    protected $fillable = [
        'cartId',
        'phoneId',
        'quantity',
        'totalMoney',
        'trash',
    ];
}
