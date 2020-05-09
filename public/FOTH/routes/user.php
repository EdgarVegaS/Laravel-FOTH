<?php

use Illuminate\Support\Facades\Route;
use App\User;

Route::get('/', 'UserController@index');

Route::get('/{userId}', 'UserController@show');

Route::post('/', 'UserController@create');

Route::put('/{userId}', 'UserController@update');

Route::delete('/{userId}', 'UserController@destroy');

