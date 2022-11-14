<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public $table = "phone";
    
    protected $fillable = [
        'name',
        'categoryId',
        'imgUrl',
        'quantity',
        'priceSale',
        'description',
        'ramId',
        'romId',
        'colorId',
        'sim',
        'screen',
        'camera',
        'ratingStart',
        'viewCustomer',
        'trash',
    ];
}
