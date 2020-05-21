<?php

use Illuminate\Support\Facades\Route;
use App\Favorite;

Route::get('/', 'FavoriteController@index');

Route::get('/{favId}', 'FavoriteController@show')->where('favId', '[0-9]+');

Route::post('/', 'FavoriteController@create');

Route::put('/{favId}', 'FavoriteController@update')->where('favId', '[0-9]+');

Route::delete('/{favId}', 'FavoriteController@destroy')->where('favId', '[0-9]+');

