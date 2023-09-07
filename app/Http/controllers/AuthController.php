<?php

namespace App\Http\controllers;

use App\Models\User;

final class AuthController extends BaseController
{
    public function authorization()
    {
        $user = new User();
        $user->load($this->getPost());
        dd($user);
    }

    public function registration()
    {

    }
}
