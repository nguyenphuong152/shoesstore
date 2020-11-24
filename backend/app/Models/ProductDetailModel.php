<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetailModel extends Model
{
    use HasFactory;

    protected $table = "product_details";

    protected $fillable = [
        'id_product',
        'cost', //gia goc
        'price', //gia ban
        'id_color',
        'id_size',
        'id_product_cata',
    ];
}
