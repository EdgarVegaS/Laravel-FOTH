<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Http\Requests\FavoriteCreateRequest;
use App\Http\Requests\FavoriteUpdateRequest;

class FavoriteController extends Controller
{
  public function index() {
    return Favorite::all();
  }

		public function show(Favorite $favId) {
			try {
				return $favId;
			} catch (Exception $e) {
				echo 'Error get favorite list id', $e->getMessage(), '\n';
			}
		}

  public function create(FavoriteCreateRequest $req) {
			try {
				$validateData = $req->validated();
				$favorite = Favorite::create($validateData);

				return response()->json($favorite, 201);
			} catch (Exception $e) {
				echo 'Error create favorite list', $e->getMessage(), '\n';
			}
  }

  public function update(FavoriteUpdateRequest $req, Favorite $favId) {
			try{
				$validatedData = $req->validated();
    $favId->update($validatedData);
    return response()->json($favId, 200);
			} catch(Exception $e) {
				echo 'Error update favorite list', $e;
			}
  }

		public function destroy(Favorite $favId) {
			try{
				$favId->delete();
				return response()->json(null, 204);
			}catch(Exception $e){
				echo 'failed to delete favorite list', $e;
			}
  }
}
