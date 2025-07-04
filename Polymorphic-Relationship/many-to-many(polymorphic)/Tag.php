<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function post(){
        return $this->morphedByMany(Post::class,'taggable');
    }
    function video(){
        return $this->morphedByMany(Video::class,'taggable');
    }
}
