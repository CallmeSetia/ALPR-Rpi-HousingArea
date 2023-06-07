<?php

namespace App\Repositories\Auth;

interface AuthRepositoryInterface
{
    public function login($request);
    public function logout($request);
}
