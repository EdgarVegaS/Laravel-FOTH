<?php

use Illuminate\Support\Facades\Route;
use App\Favorite;

Route::get('/', 'FavoriteController@index');

Route::get('/{favId}', 'FavoriteController@show');

Route::post('/', 'FavoriteController@create');

Route::put('/{favId}', 'FavoriteController@update');

Route::delete('/{favId}', 'FavoriteController@destroy');

