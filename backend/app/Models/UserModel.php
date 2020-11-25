<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\UserModel as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    protected $table = "users";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role_id',
        'password'
    ];

    protected $hidden = [
        'role_id',
        'password',
        'remember_token',
    ];
}
