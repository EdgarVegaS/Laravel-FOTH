<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index() {
    return User::all();
  }

  public function show(User $userId) {
    return $userId;
  }

  public function create(Request $req) {
    $user = User::create($req->all());
    return response()->json($user, 201);
  }

  public function update(Request $req, User $userId) {
    $userId->update($req->all());
    return response()->json($userId, 200);
  }

  public function destroy(User $userId) {
    $userId->delete();
    return response()->json(null, 204);
  }
}
