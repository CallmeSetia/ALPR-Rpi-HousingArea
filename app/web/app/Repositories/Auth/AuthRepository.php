<?php

namespace App\Repositories\Auth;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repositories\Auth\AuthRepositoryInterface;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthRepositoryInterface
{
    public function login($request)
    {
        $user = User::where('username', $request->username)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return null;
        }


        //token and cookie
        $token = $user->createToken('token')->plainTextToken;
        $cookie = cookie('token', $token, 60 * 24);

        return (object) [ 'user' => UserResource::make($user), 'token' => $token, 'cookie' => $cookie ];
    }

    public function logout($request)
    {
        $request->user()->currentAccessToken()->delete();
        $cookie = Cookie::forget('jwt');

        return $cookie;
    }
}
