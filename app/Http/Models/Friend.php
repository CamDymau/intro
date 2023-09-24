<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

final class Friend extends Model
{
    protected $table = 'main_scheme.friends';
    protected $fillable = [
        'user_id1',
        'user_id2',
        'status',
    ];
}
