<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Auth;

class AuthController extends Controller
{
    public function __invoke()
    {
    }

    public function login(Request $request)
    {
        $user = User::with('profile', 'user_role.role', 'user_role.group')
            ->whereHas('user_role')
            ->where('email', $request->email)->first();


        if (!$user || !\Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Gagal Login'
            ], 401);
        }

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
            'message' => 'SUCCESS',
            'user' => $user,
            'token' => $token
        ], 200);
    }

    public function user()
    {
        $user = User::with('profile', 'user_role.role', 'user_role.group')
            ->where('id', Auth::user()->id)
            ->first();

        return response()->json([
            'message' => 'SUCCESS',
            'user' => $user
        ], 200);
    }
}
