<?php

use App\Support\Route;

Route::get('/', 'MainController@index');
Route::post('/', 'MainController@auth');
Route::get('/home', 'MainController@home');
