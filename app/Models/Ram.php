<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;
    public $table = "ram";

    protected $attributes = [
        'trash' => 0,
    ]; 
    
    protected $fillable = [
        'name',
        'percentPrice',
        'trash'
    ];
}
