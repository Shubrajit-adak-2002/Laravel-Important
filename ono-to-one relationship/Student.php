<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];
    public $timestamps = false;

    function contact(){
        return $this->hasOne(Contact::class);
    }
}
