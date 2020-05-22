<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
  public function index() {
    return User::all();
  }

  public function show(User $userId) {
    try {
      return $userId;
    } catch (Exception $e) {
      echo 'Error get user id', $e->getMessage(), '\n';
    }
  }

  public function findUser($email) {
    try{
      $user = User::where('email',$email);
      return $user;
    }catch(Exception $e){
      echo 'Error to find email';
    }
  }

  public function create(UserCreateRequest $req) {
    try {
      $validateData = $req->validated();
      $user = User::create($validateData);

      return response()->json($user, 201);
    } catch (Exception $e) {
      echo 'Error create user', $e->getMessage(), '\n';
    }
  }

  public function update(UserUpdateRequest $req, User $userId) {
    try{
      $validatedData = $req->validated();
      $userId->update($validatedData);
      return response()->json($userId, 200);
    } catch(Exception $e) {
      echo 'Error update user';
    }
  }

  public function destroy(User $userId) {
    $userId->delete();
    return response()->json(null, 204);
  }
}

