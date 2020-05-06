<?php

use Illuminate\Support\Facades\Route;
use App\Category;

Route::get('/', 'CategoryController@index');

Route::get('/{categoryId}', 'CategoryController@show');

Route::post('/', 'CategoryController@create');

Route::put('/{categoryId}', 'CategoryController@update');

Route::delete('/{categoryId}', 'CategoryController@destroy');
