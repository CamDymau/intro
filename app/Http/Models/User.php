<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

final class User extends Model
{
    protected $table = 'main_scheme.users';
    protected $fillable = [
        'name',
        'second_name',
        'login',
        'password',
        'photo',
        'birth_date',
        'created_date',
    ];
}
