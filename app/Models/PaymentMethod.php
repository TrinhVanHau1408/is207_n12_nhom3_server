<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;
    // $table->id();
    // $table->string('name');
    // $table->integer('trash');
    // $table->timestamps();
    public $table = "payment_method";
    protected $fillable = [
        'name',
        'trash',
    ];
}
