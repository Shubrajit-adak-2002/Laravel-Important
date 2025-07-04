<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function commentable(){
        return $this->morphTo();
    }
}
