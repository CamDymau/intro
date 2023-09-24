<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use Psr\Http\Message\ResponseInterface as Response;

final class AuthController extends BaseController
{
    /**
     * @param Response $response
     * @return Response
     */
    public function authorization(Response $response): Response
    {
        $data = $_POST;
        $user = User::where(['login' => $data['login'], 'password' => $data['password']])->first();
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

        $this->setUserSession($user);

        return $this->response($response);
    }

    public function registration(Response $response)
    {
        $data = $_POST;
        $user = User::where(['login' => $data['login']])->exists();

        $this->data = [
            'result' => true,
            'redirect' => '/home'
        ];

        if ($user) {
            $this->data = [
                'result' => false,
                'message' => 'Login already taken'
            ];
        } else {
            // create photo
            $
            $data['photo_id'] = 1;
            $user = User::insert($data);
            $this->setUserSession($data);
        }

        return $this->response($response);
    }

    /**
     * @param Response $response
     * @return Response
     */
    public function logout(Response $response): Response
    {
        unset($_SESSION['user']);
        return $this->redirect($response);
    }
}
