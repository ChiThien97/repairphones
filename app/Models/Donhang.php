<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    //
    protected $fillable = [
        'id', 'title', 'note', 'id_service', 'id_customer'
    ];
}
