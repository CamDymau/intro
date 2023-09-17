<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class AuthController extends BaseController
{
    public function authorization(View $view, ServerRequestInterface $request, ResponseInterface $response)
    {
        $data = $_POST;
        $user = User::where(['login' => $data['login'], 'password' => $data['password']])->exists();
        $this->data = [
            'result' => true,
            'redirect' => '/home'
        ];

        if (!$user) {
            $this->data = [
                'result' => false,
                'message' => 'User not found'
            ];
        }

        return $this->response($response);
    }

    public function registration()
    {

    }
}
