<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    public $timestamps = false;

    protected $guarded = [];

    function photo(){
        return $this->morphTo();
    }
}
