<?php

namespace App\Http\controllers;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;

abstract class BaseController
{
    protected function view(Response $response, string $template, array $with = [])
    {
        $cache = __DIR__ . '/../storage/cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;
    }

    protected function getGet()
    {
        return $_GET;
    }

    protected function getPost()
    {
        return $_POST;
    }

    protected function getRequest()
    {
        return $_REQUEST;
    }
}
