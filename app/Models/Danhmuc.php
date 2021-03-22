<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    //
    protected $fillable = [
        'id', 'name_cate', 'description','image',
    ];
}
