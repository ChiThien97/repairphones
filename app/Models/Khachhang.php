<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Khachhang extends Model
{
    //
    protected $fillable = [
        'id', 'name', 'phone', 'email', 'address'
    ];
}
