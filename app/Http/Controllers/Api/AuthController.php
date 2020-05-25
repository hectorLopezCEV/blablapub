<?php

namespace App\Http\Controllers\Api;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;

class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        if (is_null($request->get('email')) || $request->get('email') === '') {
            return response()->json([
                'error' => 'Email required'
            ], 400);
        }
        if (is_null($request->get('password')) || $request->get('password') === '') {
            return response()->json([
                'error' => 'Password required'
            ], 400);
        }
        $credentials = request(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json([
                'error' => 'Unauthorized'
            ], 401);
        }

        return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function profile()
    {
        return response()->json(auth('api')->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json(
            ['message' => 'Successfully logged out']
        );
    }

    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh()
    {
        try {
            return $this->respondWithToken(auth('api')->refresh());
        } catch (TokenBlacklistedException $tokenBlacklistedException) {
            return response()->json(['message' => 'This token has been blacklisted']);
        } catch (Exception $e) {
            if (env('APP_ENV' == 'local')) {
                return response()->json([
                    'message' => $e->getMessage()
                ], 500);
            } else {
                return response()->json([
                    'message' => 'Internal server error'
                    ], 500);
            }
        }
    }

    /**
     * Get the token array structure.
     *
     * @param  string  $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
