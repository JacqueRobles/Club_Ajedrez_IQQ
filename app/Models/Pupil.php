<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_fide',
        'city',
        'street',
        'street_num',
        'elo',

    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }


}
