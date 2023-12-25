<?php
namespace App\Services;

use App\Models\User;

class UserService
{
    public function createDirectorUser($attributes)
    {
        $user = User::create($attributes);
        $user->assignRole('director');

        return $user;
    }

    public function createPartnerUser($attributes)
    {
        $user = User::create($attributes);
        $user->assignRole('partner');

        return $user;
    }
}
