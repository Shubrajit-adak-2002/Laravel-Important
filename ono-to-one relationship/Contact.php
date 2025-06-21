<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;

    // protected $guarded = [];

    protected $fillable = [
        'address',
        'student_id'
    ];

    function student(){
        return $this->belongsTo(Student::class);
    }
}
