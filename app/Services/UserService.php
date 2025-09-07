<?php

namespace App\Services;

use App\Models\UserModel;

class UserService
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function createUser(array $data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        return $this->userModel->insert($data);
    }
}
