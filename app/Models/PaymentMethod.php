<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
  
    public $table = "payment_method";

    protected $attributes = [
        'trash' => 0,
    ]; 
    
    protected $fillable = [
        'name',
        'trash',
    ];
}
