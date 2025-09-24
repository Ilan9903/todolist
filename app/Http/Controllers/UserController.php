<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class UserController
{
    public function getAllUsers()
    {
        return User::all();
    }

    public function getUser($id)
    {
        return $this->getUser($id);
    }

    public function createUser(UserRequest $request)
    {
        return view('admin.usercreate');
    }

    public function storeUser(Request $request)
    {
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            'data' => $user
        ], 200);
    }
}
