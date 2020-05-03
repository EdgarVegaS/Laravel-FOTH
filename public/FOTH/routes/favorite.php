<?php

use Illuminate\Support\Facades\Route;
use App\Favorite;

Route::get('/', function() {
  return response(Favorite::all(), 200);
});

Route::get('/{id}', function ($favId) {
  return response(Favorite::find($favId), 200);
});

Route::post('/', function(Request $req) {
  $res = Favorite::create($req->all());
  return $res;
});

Route::put('/{id}', function(Request $req, $favId) {
  $fav = Favorite::findOrFail($favId);
  $fav->update($req->all());
  return $fav;
});

Route::delete('/{id}',function($favId) {
  Favorite::find($favId)->delete();
  return 204;
});

