<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
  public function index() {
    return Role::all();
  }

  public function show(Role $roleId) {
    return $roleId;
  }

  public function create(Request $req) {
    $role = Role::create($req->all());
    return response()->json($role, 201);
  }

  public function update(Request $req, Role $roleId) {
    $roleId->update($req->all());
    return response()->json($roleId, 200);
  }

  public function destroy(Role $roleId) {
    $roleId->delete();
    return response()->json(null, 204);
  }
}
