<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

final class Comment extends Model
{
    protected $table = 'main_scheme.comments';
    protected $fillable = [
        'user_id',
        'comments_text',
        'like_count',
    ];
}
