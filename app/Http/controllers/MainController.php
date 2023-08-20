<?php

namespace App\Http\controllers;

use App\Support\View;

final class MainController extends BaseController
{
    public function index(View $view)
    {
        return $view('auth.home');
    }

    public function home(View $view)
    {
        return $view('home.index');
    }
}
