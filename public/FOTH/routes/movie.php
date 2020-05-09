<?php

use Illuminate\Support\Facades\Route;
use App\Movie;

Route::get('/', 'MovieController@index');

Route::get('/{movieId}', 'MovieController@show');

Route::post('/', 'MovieController@create');

Route::put('/{movieId}', 'MovieController@update');

Route::delete('/{movieId}', 'MovieController@destroy');

