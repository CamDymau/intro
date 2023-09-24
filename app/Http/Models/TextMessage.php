<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class TextMessage extends Model
{
    protected $table = 'main_scheme.text_messages';
    protected $fillable = [
        'id_message',
        'message_text',
    ];

    /**
     * @return BelongsTo
     */
    public function message(): BelongsTo
    {
        return $this->belongsTo(Message::class);
    }
}
