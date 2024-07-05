<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'telepon',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function workedOrders()
    {
        return $this->hasMany(Order::class, 'worker_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
