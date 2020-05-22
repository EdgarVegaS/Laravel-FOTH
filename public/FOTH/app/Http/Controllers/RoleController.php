<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleUpdateRequest;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
  public function index() {
    return Role::all();
  }

		public function show(Role $roleId) {
			try {
				return $roleId;
			} catch (Exception $e) {
				echo 'Error get role id', $e->getMessage(), '\n';
			}
		}

		public function create(RoleCreateRequest $req) {
			try {
				$validateData = $req->validated();
				$role = Role::create($validateData);

				return response()->json($role, 201);
			} catch (Exception $e) {
				Log::error($e->getMessage());
				echo 'Error create role', $e->getMessage(), '\n';
			}
  }

		public function update(RoleUpdateRequest $req, Role $roleId) {
			try{
				$roleId->update($req->all());
				return response()->json($roleId, 200);
			} catch(Exception $e) {
				echo 'Error update role';
			}
		}

		public function destroy(Role $roleId) {
			$roleId->delete();
			return response()->json(null, 204);
		}
}
