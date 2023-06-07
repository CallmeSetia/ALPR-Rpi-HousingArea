<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function findByUsername($username);
}
