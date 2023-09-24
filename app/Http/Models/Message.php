<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

final class Message extends Model
{
    protected $table = 'main_scheme.messages';
    protected $fillable = [
        'hash_chat',
        'user_id1',
        'user_id2',
        'sender',
        'changed',
    ];
}
