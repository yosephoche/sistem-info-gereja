<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function __invoke()
    {
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

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
}