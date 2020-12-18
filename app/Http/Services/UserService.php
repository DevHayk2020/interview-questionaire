<?php

namespace App\Http\Services;

use App\Http\Repositories\User\UserRepository;

class UserService
{
    /**
     * @var object $repository
     */
    private object $repository;

    /**
     * __construct
     *
     * @param object $repository
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * getUser
     *
     * @return void
     */
    public function getUsers()
    {
        return $this->repository->getUsers();
    }
}
