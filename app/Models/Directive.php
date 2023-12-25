<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Directive extends User
{
    use HasFactory;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',

    ];

}
