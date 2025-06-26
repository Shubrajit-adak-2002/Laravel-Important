<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    // You have to use this global variable in your model if you want to show your json data from db
    protected $casts = [
        // 'data'=>'json'

        // You can also use array instead of json, it'll work same(recomended)
        'data'=>'array'
    ];
}
