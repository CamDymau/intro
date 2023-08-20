<?php

use App\Support\Route;

Route::get('/', 'MainController@index');
Route::get('/home', 'MainController@home');
