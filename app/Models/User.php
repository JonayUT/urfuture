<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Model implements AuthenticatableContract
{
    use HasApiTokens, Notifiable, Authenticatable;

    protected $collection = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'roles', // Campo de roles como array
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'roles' => 'array', // Asegurar que roles es un array
    ];

    public function hasRole($role)
    {
        return in_array($role, $this->roles ?? []);
    }
}
