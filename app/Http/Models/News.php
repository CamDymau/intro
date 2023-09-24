<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class News extends Model
{
    protected $table = 'main_scheme.news';
    protected $fillable = [
        'user_sender',
        'photo',
        'news_text',
        'like_count',
        'comment_id',
    ];

    /**
     * @return BelongsTo
     */
    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
}
