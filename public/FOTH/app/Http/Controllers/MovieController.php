<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
  public function index() {
    return Movie::all();
  }

  public function show(Movie $movieId) {
    return $movieId;
  }

  public function create(Request $req) {
    $movie = Movie::create($req->all());
    return response()->json($movie, 201);
  }

  public function update(Request $req, Movie $movieId) {
    $movieId->update($req->all());
    return response()->json($movieId, 200);
  }

  public function destroy(Movie $movieId) {
    $movieId->delete();
    return response()->json(null, 204);
  }
}
