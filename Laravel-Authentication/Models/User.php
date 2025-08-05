<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamps = false;

    // Optional: if your table name is not 'users'
    // protected $table = 'your_table_name';

    // Optional: fields that can be mass-assigned
    protected $fillable = ['name', 'email', 'password'];
}
