<?php

use Illuminate\Support\Facades\Route;
use App\Category;

Route::get('/', 'CategoryController@index');

Route::get('/{categoryId}', 'CategoryController@show')->where('categoryId', '[0-9]+');

Route::post('/', 'CategoryController@create');

Route::put('/{categoryId}', 'CategoryController@update')->where('categoryId', '[0-9]+');

Route::delete('/{categoryId}', 'CategoryController@destroy')->where('categoryId', '[0-9]+');
