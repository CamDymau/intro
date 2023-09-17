<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Support\Route;
use Slim\App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

//return function (App $app) {
//    $app->get('/', [MainController::class, 'index']);
//    $app->post('/authorization', [AuthController::class, 'authorization']);
//};
Route::get('/', 'MainController@index');
//Route::get('/', 'MainController@index', fn (Request $request) => $request, fn (Response $response) => $response);

Route::get('/home', 'MainController@home');

/** POST */

Route::post('/authorization', 'AuthController@authorization');
Route::post('/registration', 'AuthController@registration');
