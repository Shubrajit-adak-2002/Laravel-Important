<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    function image(){
        return $this->morphOne(photo::class,'photo');
    }
}
