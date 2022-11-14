<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // $table->id();
    // $table->integer('customerId');
    // $table->foreign('customerId')->references('id')->on('customer')->onDelete('cascade');
    // $table->text('orderCode');
    // $table->integer('totalQuantity');
    // $table->decimal('totalPrice',15,2);
    // $table->integer('paymentId');
    // $table->foreign('paymentId')->references('id')->on('payment_method');
    // $table->integer('shipId');
    // $table->foreign('shipId')->references('id')->on('ship_method')->onDelete('cascade');
    // $table->text('noteMess');
    // $table->integer('trash');
    // $table->timestamps();

    public $table = "order";

    protected $attributes = [
        'trash' => 0,
    ];
    
    protected $fillable = [
        'customerId',
        'orderCode',
        'totalQuantity',
        'totalPrice',
        'paymentId',
        'shipId',
        'noteMess',
        'trash'
    ];
    
}
