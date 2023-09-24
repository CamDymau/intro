<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class User extends Model
{
    protected $table = 'main_scheme.users';
    protected $fillable = [
        'name',
        'second_name',
        'login',
        'password',
        'photo_id',
        'birth_date',
        'created_date',
    ];

    /**
     * @return BelongsTo
     */
    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }
}
