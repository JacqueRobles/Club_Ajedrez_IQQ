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

        // Determine the type of user being created
        switch ($request->input('user_type')) {
            case 'directive':
                $userable = Directive::create($request->only([
                    // List the directive attributes here
                ]));
                break;
            case 'partner':
                $userable = Partner::create($request->only([
                    // List the partner attributes here
                ]));
                break;
            case 'director':
                $userable = Director::create($request->only([
                    // List the director attributes here
                ]));
                break;
            case 'pupil':
                $userable = Pupil::create($request->only([
                    // List the pupil attributes here
                ]));
                break;
            case 'player':
                $userable = Player::create($request->only([
                    // List the player attributes here
                ]));
                break;
            default:
                // Handle invalid user type
                break;
        }

        // Create the User
        $user = User::create(array_merge($request->only([
            // List the user attributes here
        ]), [
            'userable_id' => $userable->id,
            'userable_type' => get_class($userable)
        ]));

        // Redirect or return a response
        // Return the created User
        return response()->json($user, 201);

        // Redirect the user to the dashboard
        // return redirect()->route('dashboard');
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