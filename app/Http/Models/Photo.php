<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

final class Photo extends Model
{
    protected $table = 'main_scheme.user_photo';
    protected $fillable = [
        'path',
        'name',
        'mime_type',
        'size',
        'like_count',
    ];
}
