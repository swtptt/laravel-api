<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // ===== JWT functions =====
    public function getJWTIdentifier()
    {
        return $this->getKey(); // biasanya id
    }

    public function getJWTCustomClaims()
    {
        return []; // bisa diisi custom payload, kosong = default
    }
}
