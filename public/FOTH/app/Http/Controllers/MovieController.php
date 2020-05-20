<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\MovieCreateRequest;
use App\Http\Requests\MovieUpdateRequest;

class MovieController extends Controller
{
	public function index() {
		return Movie::all();
	}

	public function show(Movie $movieId) {
		try {
		return $movieId;
		} catch (Exception $e) {
			Log::error($e->getMessage());
			echo 'Error get movie id', $e->getMessage(), '\n';
		}
	}

	public function create(MovieCreateRequest $req) {
		try {
			$validateData = $req->validated();
			$movie = Movie::create($validateData);

			return response()->json($movie, 201);
		} catch (Exception $e) {
			Log::error($e->getMessage());
			echo 'Error create movie', $e->getMessage(), '\n';
		}
	}

	public function update(MovieUpdateRequest $req, Movie $movieId) {
		try{
			$movieId->update($req->all());
			return response()->json($movieId, 200);
		} catch(Exception $e) {
			echo 'Error update movie';
		}
	}

	public function destroy(Movie $movieId) {
		$movieId->delete();
		return response()->json(null, 204);
	}
}
