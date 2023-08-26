<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
final class User extends Model
{
    protected $table = 'main_scheme.users';
    protected $fillable = [
        'id',
        'name'
    ];
}
