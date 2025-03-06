<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

cclass User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password', 'role'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_has_roles');
    }

    public function permissions()
    {
        return $this->hasManyThrough(Permission::class, Role::class);
    }
}