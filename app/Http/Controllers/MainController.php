<?php

namespace App\Http\Controllers;

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
        return $view('home.index');
    }
}
