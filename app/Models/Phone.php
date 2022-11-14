<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;
    public $table = "phone";
    protected $attributes = [
        'ratingStart' => 0,
        'viewCustomer' => 0,
        'trash' => 0,
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
        'trash',
    ];

    // protected $attributes = [
    //     'ratingStart' => 'default 0',
    //     'viewCustomer' => 'default 0',
    //     'trash' => 'default 0',
    // ];
}
