<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('movie', function() {
  return response([movies], 200);
});

Route::get('movie/{id}', function ($movieId) {
  return response()->json(['movieId' => "{$movieId}"], 200);
});


Route::post('movie', function() {
  return  response()->json([
    'message' => 'Create success'
  ], 201);
});

Route::put('movie/{id}', function() {
  return  response()->json([
    'message' => 'Update success'
  ], 200);
});

Route::delete('movie/{id}',function() {
  return  response()->json(null, 204);
});
