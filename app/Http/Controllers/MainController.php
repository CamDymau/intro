<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class MainController extends BaseController
{
    public function index(View $view, ServerRequestInterface $request, ResponseInterface $response)
    {
        return $view('auth.authForm');
    }

    public function home(View $view)
    {
        $user = User::where(['login' => session('user')['login']])->with('photo')->first();

        return $view('home.index', compact('user'));
    }
}
