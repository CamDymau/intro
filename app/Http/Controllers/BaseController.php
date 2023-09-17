<?php

namespace App\Http\Controllers;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseInterface as Response;

abstract class BaseController
{
    /** @var array */
    protected array $data;

    /**
     * @param Response $response
     * @return Response
     */
    protected function response(Response $response)
    {
        $payload = json_encode($this->data);
        $response->getBody()->write($payload);

        return $response
            ->withHeader('Content-Type', 'application/json');
    }
}
