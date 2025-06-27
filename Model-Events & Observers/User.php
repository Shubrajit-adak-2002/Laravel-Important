<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function videos(){
        return $this->hasMany(Video::class);
    }

    static function booted():void
    {
        static::deleted(function($user){
            $user->videos()->delete();
        });
    }

}
