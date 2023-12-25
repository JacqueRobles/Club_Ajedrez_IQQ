<?php

namespace App\Http\Controllers;

use App\Services\UserService;

use App\Models\User;
use App\Models\Directive;
use App\Models\Partner;
use App\Models\Director;
use App\Models\Pupil;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function registerPlayer(Request $request)
    {
        // Validate the request data
        $request->validate([
            // Add your validation rules here
        ]);
    
        // Create the User
        $user = $this->userService->createUser($request->all(), 'player');
    
        // Return the created User
        return response()->json($user, 201);
    }
    
    public function store(Request $request)
    {
        // Check if the authenticated user is a directive
        if (!(Auth::user()->userable instanceof Directive)) {
            // Return an error response
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    
        // Validate the request data
        $request->validate([
            // Add your validation rules here
        ]);
    
        // Create the User
        $user = $this->userService->createUser($request->all(), $request->input('user_type'));
    
        // Return the created User
        return response()->json($user, 201);
    }

}