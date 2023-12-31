<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'street',
        'street_num',
        'inscription_date',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

}
