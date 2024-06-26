<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pekerja extends User
{
    protected $fillable = [
        'name',
        'location',
        'skills',
        'rating',
        'level',
        'earned',
        'points',
    ];
}