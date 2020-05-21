<?php

use Illuminate\Support\Facades\Route;
use App\User;

Route::get('/', 'UserController@index');

Route::get('/{userId}', 'UserController@show')->where('userId', '[0-9]+');

Route::post('/', 'UserController@create');

Route::put('/{userId}', 'UserController@update')->where('userId', '[0-9]+');

Route::delete('/{userId}', 'UserController@destroy')->where('userId', '[0-9]+');

