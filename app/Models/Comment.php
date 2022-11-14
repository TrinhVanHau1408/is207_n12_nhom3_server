<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // $table->id();
    // $table->unsignedBigInteger('customerId');
    // $table->foreign('customerId')->references('id')->on('customer')->onDelete('cascade');
    // $table->unsignedBigInteger('phoneId');
    // $table->foreign('phoneId')->references('id')->on('phone')->onDelete('cascade');
    // $table->text('content');
    // $table->integer('like');
    // $table->integer('dislike');
    // $table->integer('trash');
    // $table->timestamps();

    public $table = "comment";

    protected $attributes = [
        'trash' => 0,
        'like' => 0,
        'dislike' => 0,
    ];

    protected $fillable = [
        'customerId',
        'phoneId',
        'content',
        'like',
        'dislike',
        'trash',
    ];
}
