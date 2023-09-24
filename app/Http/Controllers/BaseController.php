<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Psr\Http\Message\ResponseInterface as Response;

abstract class BaseController
{
    /** @var array */
    protected array $data = [];

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

    /**
     * @param Response $response
     * @param string $path
     * @return Response
     */
    protected function redirect(Response $response, string $path = '/'): Response
    {
        return $response->withHeader('Location', $path);
    }

    /**
     * @param User|array $user
     * @return void
     */
    protected function setUserSession(User|array $user)
    {
        session('user', [
            'name' => $user['name'],
            'login' => $user['login'],
            'photo_id' => $user['photo_id'],
        ]);
    }
}
