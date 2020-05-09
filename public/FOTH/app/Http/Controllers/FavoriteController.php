<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;

class FavoriteController extends Controller
{
  public function index() {
    return Favorite::all();
  }

  public function show(Favorite $favId) {
    return $favId;
  }

  public function create(Request $req) {
    $favorite = Favorite::create($req->all());
    return response()->json($favorite, 201);
  }

  public function update(Request $req, Favorite $favId) {
    $favId->update($req->all());
    return response()->json($favId, 200);
  }

  public function destroy(Favorite $favId) {
    $favId->delete();
    return response()->json(null, 204);
  }
}
