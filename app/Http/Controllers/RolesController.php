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

    public function create()
    {
//        $role = new Role();
//
//        $role->name = 'Client';
//        $role->save();
        Role::create([
            'name' => 'Admin',
            ]);
        return response()->json(true);
   }

    public function show(Role $role)
    {
        
        return response()->json(['data' => $role]);
    }
}
