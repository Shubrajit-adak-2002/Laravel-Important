<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public $timestamps = false;

    function latestOrder(){
        return $this->hasOne(order::class)->latestOfMany();
    }
    
    function oldestOrder(){
        return $this->hasOne(order::class)->oldestOfMany();
    }

}
