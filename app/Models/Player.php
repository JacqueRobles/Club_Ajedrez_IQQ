<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class player extends Model
{
    use HasFactory;

    protected $fillable = [

        'city',
        'street',
        'num_street',
        'elo',

    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

}
