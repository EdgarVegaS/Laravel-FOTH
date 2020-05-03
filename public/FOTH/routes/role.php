<?php

use Illuminate\Support\Facades\Route;
use App\Movie;

Route::get('/', function() {
  return response(Role::all(), 200);
});

Route::get('/{id}', function ($roleId) {
  return response(Role::find($roleId), 200);
});

Route::post('/', function(Request $req) {
  $res = Role::create($req->all());
  return $res;
});

Route::put('/{id}', function(Request $req, $roleId) {
  $role = Role::findOrFail($roleId);
  $role->update($req->all());
  return $role;
});

Route::delete('/{id}',function($movieId) {
  Movie::find($movieId)->delete();
  return 204;
});

