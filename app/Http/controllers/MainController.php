<?php

namespace App\Http\controllers;

use App\Support\View;
use Illuminate\Database\Capsule\Manager as Capsule;

final class MainController extends BaseController
{
    public function index(View $view, Capsule $db)
    {
//        var_dump($db->table('main_scheme.users')->find(1));die();
        return $view('auth.home');
    }

    public function home(View $view)
    {
        return $view('home.index');
    }
}
