<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    public $timestamps = false;

    function user(){
        return $this->belongsTo(user::class);
    }
}
