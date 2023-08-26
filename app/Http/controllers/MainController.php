<?php

namespace App\Http\controllers;

use App\Models\User;
use App\Support\View;

final class MainController extends BaseController
{
    public function index(View $view)
    {
        echo User::find(1);
        return $view('auth.home');
    }

    public function home(View $view)
    {
        return $view('home.index');
    }
}
