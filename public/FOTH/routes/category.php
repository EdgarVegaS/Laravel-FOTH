<?php

use Illuminate\Support\Facades\Route;
use App\Category;

Route::get('/', function() {
  return response(Category::all(), 200);
});

Route::get('/{id}', function ($categoryId) {
  return response(Category::find($categoryId), 200);
});

Route::post('/', function(Request $req) {
  $res = Category::create($req->all());
  return $res;
});

Route::put('/{id}', function(Request $req, $categoryId) {
  $category = Category::findOrFail($categoryId);
  $category->update($req->all());
  return $category;
});

Route::delete('/{id}',function($categoryId) {
  Category::find($categoryId)->delete();
  return 204;
});

