<?php

namespace App\Models;

use App\Models\Scopes\Userscope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
#[ScopedBy([Userscope::class])]
class User extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    function post(){
        return $this->hasMany(Post::class);
    }



    // These are local query scopes

    // function scopeActive($query){
    //     return $query->whereStatus(1);
    // }

    // This is an local scope

    function scopeDeactive($query){
        return $query->whereStatus(0);
    }

    // ---------------------------------------

    // This is an internal global query scope
    // protected static function booted():void
    // {
    //     static::addGlobalScope('userdetail',function(Builder $builder){
    //         $builder->selectRaw('*')
    //         ->with('post:post_title,description,user_id') // When you want to show another data table you have include that foreign key
    //         ->whereStatus(1);
    //     });
    // }
}
