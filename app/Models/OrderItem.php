<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    // $table->id();
    // $table->integer('orderId');
    // $table->foreign('orderId')->references('id')->on('order')->onDelete('cascade');
    // $table->unsignedBigInteger('phoneId');
    // $table->foreign('phoneId')->references('id')->on('phone')->onDelete('cascade');
    // $table->integer('quantity');
    // $table->decimal('priceSale',15,2);
    // $table->decimal('totalPrice',15,2);
    // $table->integer('trash');
    // $table->timestamps();
    public $table = "order_item";
    protected $fillable = [
        'orderId',
        'phoneId',
        'quantity',
        'priceSale',
        'totalPrice',
        'trash'
    ];
}
