<?php

namespace App\Http\controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class MainController extends BaseController
{
    public function index(Request $request, Response $response)
    {
        $response->getBody()->write("Hello world!");
        return $response;
    }
}
