<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory, SoftDeletes;
    public $table = "phone";
    protected $attributes = [
        'ratingStart' => 0,
        'viewCustomer' => 0,
    ];
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
    ];

}
