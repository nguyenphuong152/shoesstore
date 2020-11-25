<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCatalogModel extends Model
{
    use HasFactory;

    protected $table = "product_catalogs";

    protected $fillable = [
        'name',
        'gender_id',
    ];
}
