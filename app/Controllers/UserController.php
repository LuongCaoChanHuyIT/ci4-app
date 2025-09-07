<?php

namespace App\Controllers;
use App\Services\UserService;
use Exception;

class UserController extends BaseController 
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }
    
    public function create() 
    {
        try {
            $data = $this->request->getJSON(true); 
            // Lấy dữ liệu JSON từ request body
            // hoặc $this->request->getPost() nếu form-data
            dd($data);
            $this->userService->createUser($data);

            return $this->response->setJSON([
                'status'  => 'success',
                'message' => 'User created successfully',
            ])->setStatusCode(201); // HTTP 201 Created
        } catch (Exception $e) {
            dd($e);
        }
    }
}