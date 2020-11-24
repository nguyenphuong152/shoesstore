<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
    use HasFactory;
    protected $table = "accounts";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'id_type_account',
        'password'
    ];
}
