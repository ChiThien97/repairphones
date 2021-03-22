<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    //
    protected $fillable = [
        'id', 
        'name_service', 
        'price', 
        'sale_price', 
        'description', 
        'image',
        'id_cate'
    ];
}
