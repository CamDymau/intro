<?php

namespace App\Http\controllers;

use App\Models\User;
use App\Support\View;
use Psr\Http\Message\ResponseInterface as Response;

final class MainController extends BaseController
{
    public function index(View $view)
    {
//        dd($request);
//        echo User::find(1);
        return $view('auth.authForm');
    }

    public function home(View $view)
    {
        return $view('home.index');
    }
}
