<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\User;

class UserService
{

    public function getByEmail(string $email)
    {
        return User::where('email', $email)->first();
    }

    public function create(Request $request)
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return User::where('email', $email)->first();
    }

}