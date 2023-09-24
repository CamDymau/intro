<?php

use App\Support\Route;

/** GET */

Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@home');
Route::get('/logout', 'AuthController@logout');

/** POST */

Route::post('/authorization', 'AuthController@authorization');
Route::post('/registration', 'AuthController@registration');
