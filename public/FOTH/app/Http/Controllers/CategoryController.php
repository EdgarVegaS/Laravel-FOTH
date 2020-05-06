<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function index() {
    return Category::all();
  }

  public function show(Category $categoryId) {
    return $categoryId;
  }

  public function create(Request $req) {
    $category = Category::create($req->all());
    return response()->json($category, 201);
  }

  public function update(Request $req, Category $categoryId) {
    $categoryId->update($req->all());
    return response()->json($categoryId, 200);
  }

  public function destroy(Category $categoryId) {
    $categoryId->delete();
    return response()->json(null, 204);
  }
}
