<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(LoginRequest $request)
    {
        $input = $request->validated();

        $credentials = request([
            $input['email'],
            $input['senha']
        ]);

        $token = auth()->attempt($credentials);

        if (!$token) {
            return response()->json(['error' => 'Usuário não autorizado'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 5 * 60
        ]);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Usuário saiu da plataforma']);
    }
}
