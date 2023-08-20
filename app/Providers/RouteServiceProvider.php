<?php

namespace App\Providers;

use App\Support\Route;

final class RouteServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::setup($this->app);
    }

    public function boot()
    {
        require routes_path('web.php');
    }
}
