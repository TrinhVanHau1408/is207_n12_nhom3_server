<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    public $table = "color";
    
    protected $attributes = [
        'trash' => 0,
    ];

    protected $fillable = [
        'name',
        'percentPrice',
        'trash'
    ];
}
