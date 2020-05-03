<?php

use Illuminate\Support\Facades\Route;
use App\User;

Route::get('/', function() {
  return response(User::all(), 200);
});

Route::get('/{id}', function ($userId) {
  return response(User::find($userId), 200);
});

Route::post('/', function(Request $req) {
  $res = User::create($req->all());
  return $res;
});

Route::put('/{id}', function(Request $req, $userId) {
  $user = User::findOrFail($userId);
  $user->update($req->all());
  return $user;
});

Route::delete('/{id}',function($userId) {
  User::find($userId)->delete();
  return 204;
});

