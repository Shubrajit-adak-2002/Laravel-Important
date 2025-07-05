<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class User extends Model
{
    public $timestamps = false;
    protected $guarded = [];



    /**
     * Here we are using Acessors for formatting db data's
     * If any function name start's from get___Attribute, which means that was a Acessor function
     */
    function getNameAttribute($value){
        return ucwords($value);
    }

    function getEmailAttribute($value){
        return strtolower($value);
    }

    function getDobAttribute($value){
        return date('d M Y',strtotime($value));
    }

    function getSalaryAttribute($value){
        // Here we are showing salary currency, by default it will show dollars
        // return Number::currency($value);

        // If you want to show salary in another currency use this syntax
        // return Number::currency($value,in: 'EUR');

        // If you want to show the salary in words use this method
        return Number::spell($value);
    }

    /**
     * If you any function name start's from set___Attribute, which it's a Mutator
     * Here we format the data before storing in db
     */

    function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }


    /**
     * This is new syntax of Acessors & Mutators which we use version 10 or Abovein LARAVEL
     * Here we can use & make Acessors,Mutators
     */
    protected function User() :Attribute{
        return Attribute::make(
            get:fn(string $value) => ucwords($value),
            set:fn(string $value) => ucfirst($value)
        );
    }


}
