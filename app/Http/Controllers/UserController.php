<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address,
            'DOB' => $request->DOB,
            'role_id' => $request->role_id,
        ]);
    }
}
