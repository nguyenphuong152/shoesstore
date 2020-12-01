<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeModel extends Model
{
    public $timestamps = false;
    
    protected $table = "sizes";

    protected $fillable = [
        'name'
    ];
}
