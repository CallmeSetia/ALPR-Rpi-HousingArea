<?php

namespace App\Repositories\User;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{

    public function findByUsername($username)
    {
        return User::where('username', $username)->first();
    }
}
