<?php

use app\controllers\MainController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $app->get('/', MainController::class. ':index');

    $app->get('/home', function (Request $request, Response $response, $args) {
        return view($response, 'auth.home');
    });
};

