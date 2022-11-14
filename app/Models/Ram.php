<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;
    public $table = "ram";
    protected $fillable = [
        'name',
        'percentPrice',
        'trash'
    ];
}
