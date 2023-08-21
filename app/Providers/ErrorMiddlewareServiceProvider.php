<?php

namespace App\Providers;

use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

final class ErrorMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        if (env('DEBUG')) {
            $this->app->add(new WhoopsMiddleware());
        }
    }

    public function boot()
    {
//        require routes_path('web.php');
    }
}
