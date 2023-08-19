<?php

namespace app\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class MainController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write("Hello world!");
        return $response;
    }
}
