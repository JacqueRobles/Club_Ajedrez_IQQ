<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createDirectorUser(Request $request)
    {
        $attributes = $request->all();
        $user = $this->userService->createDirectorUser($attributes);

        // Additional logic
        
    }

    public function createPartnerUser(Request $request)
    {
        $attributes = $request->all();
        $user = $this->userService->createPartnerUser($attributes);

        // Additional logic
    }
}