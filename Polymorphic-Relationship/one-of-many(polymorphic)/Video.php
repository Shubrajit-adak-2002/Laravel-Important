<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function comment(){
        return $this->morphMany(Comment::class,'commentable');
    }

    function latestVideo(){
        return $this->morphOne(Comment::class,'commentable')->latestOfMany();
    }

    function oldestVideo(){
        return $this->morphOne(Comment::class,'commentable')->oldestOfMany();
    }

    function bestVideo(){
        return $this->morphOne(Comment::class,'commentable')->ofMany('likes','max');
    }

    function leastVideo(){
        return $this->morphOne(Comment::class,'commentable')->ofMany('likes','min');
    }
}
