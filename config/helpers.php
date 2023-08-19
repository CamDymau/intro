<?php

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;

if (!function_exists('view')) {
    function view(Response $response, string $template, array $with = [])
    {
        $cache = __DIR__ . '/../storage/cache';
        $views = __DIR__ . '/../resources/views';

        $blade = (new Blade($views, $cache))->make($template, $with);

        $response->getBody()->write($blade->render());

        return $response;
    }
}
