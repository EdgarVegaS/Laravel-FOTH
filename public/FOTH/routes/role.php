<?php

use Illuminate\Support\Facades\Route;
use App\Role;

Route::get('/', 'RoleController@index');

Route::get('/{roleId}', 'RoleController@show')->where('roleId', '[0-9]+');

Route::post('/', 'RoleController@create');

Route::put('/{roleId}', 'RoleController@update')->where('roleId', '[0-9]+');

Route::delete('/{roleId}','RoleController@destroy')->where('roleId', '[0-9]+');

