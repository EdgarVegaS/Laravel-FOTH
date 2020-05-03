<?php

use Illuminate\Support\Facades\Route;
use App\Movie;

Route::get('/', function() {
  return response(Movie::all(), 200);
});

Route::get('/{id}', function ($movieId) {
  return response(Movie::find($movieId), 200);
});

Route::post('/', function(Request $req) {
  $res = Movie::create($req->all());
  return $res;
});

Route::put('/{id}', function(Request $req, $movieId) {
  $movie = Movie::findOrFail($movieId);
  $movie->update($req->all());
  return $movie;
});

Route::delete('/{id}',function($movieId) {
  Movie::find($movieId)->delete();
  return 204;
});

