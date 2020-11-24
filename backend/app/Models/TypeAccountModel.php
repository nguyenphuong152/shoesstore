<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAccountModel extends Model
{
    use HasFactory;
    protected $table = "type_accounts";
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];
}
