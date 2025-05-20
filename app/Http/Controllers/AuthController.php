<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = Userinfo::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid login credentials',
            ], 401);
        }

        return response()->json([
            'message' => 'Login successful',
            'user' => [
                'id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
            ],
        ], 200);
    }
}
