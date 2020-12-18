<?php

namespace App\Http\Repositories\User;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers() : object{
        return User::with('messages', 'yearMessages')->get();
    }
}
