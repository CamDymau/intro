<?php

use App\Support\Route;

Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@home');

/** POST */

Route::post('/authorization', 'AuthController@authorization');
Route::post('/registration', 'AuthController@registration');
