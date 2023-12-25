<?php
namespace App\Services;

use App\Models\User;
use App\Models\Directive;
use App\Models\Partner;
use App\Models\Director;
use App\Models\Pupil;
use App\Models\Player;
use Spatie\Permission\Models\Role;

class UserService
{
    public function createUser(array $attributes, string $userType)
    {
        // Determine the type of user being created
        switch ($userType) {
            case 'directive':
                $userable = Directive::create($attributes);
                break;
            case 'partner':
                $userable = Partner::create($attributes);
                break;
            case 'director':
                $userable = Director::create($attributes);
                break;
            case 'pupil':
                $userable = Pupil::create($attributes);
                break;
            case 'player':
                $userable = Player::create($attributes);
                break;
            default:
                // Handle invalid user type
                break;
        }

        // Create the User
        $user = User::create([
            'userable_id' => $userable->id,
            'userable_type' => get_class($userable),
            // Add other user attributes here
        ]);

        // Assign the role to the user
        $role = Role::where('name', $userType)->first();
        if ($role) {
            $user->assignRole($userType);
        }

        return $user;
    }

}