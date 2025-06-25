<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function tag()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
