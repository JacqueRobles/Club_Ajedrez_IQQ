<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'pay_date',
        'period',
        'state',

    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
    

}
