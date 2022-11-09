<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return response()->json(Role::get());
   }

    public function create(Request $request)
    {
        Role::create($request->only('name'));

        return response()->json(true);
   }

    public function show(Role $role)
    {

        return response()->json(['data' => $role]);
    }

    public function update(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        return response()->json($role);
    }
}
