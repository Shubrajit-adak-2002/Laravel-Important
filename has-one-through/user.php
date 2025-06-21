<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public $timestamps = false;

    function phoneNumber(){
        return $this->hasOneThrough(phone::class,company::class);
    }

    function company(){
        return $this->hasOne(company::class);
    }
}
