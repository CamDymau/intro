<?php

use App\Http\HttpKernel;
use DI\Container;
use DI\Bridge\Slim\Bridge as App;

$app = App::create(new Container);

$_SERVER['app'] = &$app;

if (!function_exists('app'))
{
    function app()
    {
        return $_SERVER['app'];
    }
}

$app->addErrorMiddleware(true,true,true);

return HttpKernel::bootstrap($app)->getApp();
