<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipMethod extends Model
{
    use HasFactory;
    public $table = "ship_method";

    protected $attributes = [
        'trash' => 0,
    ]; 
    
    protected $fillable = [
        'name',
        'feePrice',
        'deliveryTime',
        'trash',
    ];
}
