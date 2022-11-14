<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReplyComment extends Model
{
    use HasFactory;
    public $table = "reply_comment";
    protected $fillable = [
        'commentId',
        'customerId',
        'content',
        'like',
        'dislike',
        'trash',
    ];
}
