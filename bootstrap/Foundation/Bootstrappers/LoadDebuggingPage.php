<?php

namespace Boot\Foundation\Bootstrappers;

use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

final class LoadDebuggingPage extends Bootstrapper
{
    public function boot()
    {
        if (getenv('DEBUG')) {
            $this->app->add(new WhoopsMiddleware());
        }
    }
}
