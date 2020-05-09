<?php

use Illuminate\Support\Facades\Route;
use App\Role;

Route::get('/', 'RoleController@index');

Route::get('/{roleId}', 'RoleController@show');

Route::post('/', 'RoleController@create');

Route::put('/{roleId}', 'RoleController@update');

Route::delete('/{roleId}','RoleController@destroy');

