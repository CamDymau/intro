<?php

namespace App\Providers;

use App\Support\Route;

final class ErrorMiddlewareServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->addErrorMiddleware(
            config('middleware.errorDetails.displayErrorDetails'),
            config('middleware.errorDetails.logErrors'),
            config('middleware.errorDetails.logErrorDetails'),
        );
    }

    public function boot()
    {
//        require routes_path('web.php');
    }
}
