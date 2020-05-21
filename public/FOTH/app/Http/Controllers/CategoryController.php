<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
	public function index() {
		return Category::all();
	}

	public function show(Category $categoryId) {
		try {
			return $categoryId;
		} catch (Exception $e) {
			echo 'Error get category id', $e->getMessage(), '\n';
		}
	}

	public function create(CategoryCreateRequest $req) {
		try {
			$validateData = $req->validated();
			$category = Category::create($validateData);

			return response()->json($category, 201);
		} catch (Exception $e) {
			echo 'Error create category', $e->getMessage(), '\n';
		}
	}

	public function update(CategoryUpdateRequest $req, Category $categoryId) {
		try{
			$validatedData = $req->validated();
			$categoryId->update($validatedData);
			return response()->json($categoryId, 200);
		} catch(Exception $e) {
			echo 'Error update category';
		}
	}

	public function destroy(Category $categoryId) {
		try{
		$categoryId->delete();
		return response()->json(null, 204);
		}catch(Exception $e){
			echo 'failed to delete category', $e;
		}
	}
}
