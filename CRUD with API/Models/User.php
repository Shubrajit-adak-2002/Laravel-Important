<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;

    public $timestamps = false;
    protected $guarded = [];


    public function casts():array
    {
        return[
            'password'=>'hashed'
        ];
    }
}
