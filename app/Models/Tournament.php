<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'format',
        'date',
        'game_rythm',
        'description',
        'inscriptions',
        'category',
        'prizes',
        'contact',
        'general_referee',
        'organizer',
        'quotas'
    ];

}
