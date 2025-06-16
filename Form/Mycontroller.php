<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

// You have to import this class to use 2nd way of custom validation rule
use Closure;

class Mycontroller extends Controller
{
    function submit(StudentRequest $req){

        $req->validate([
            // This is the first way to create custom validation rule
            // 'name' => ['required',new Uppercase],

            'name' => ['required',function(string $attribute,mixed $value,Closure $fail){
                if (strtoupper($value) !== $value) {
                $fail('Your :attribute must be in Uppercase or Capital Letter');
            }
            }],
            'email' => 'required|email',
            'username' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required'
        ],

        // The below array is for custom validation messages

        // [
        //     'name.required' => 'Please Enter your name',
        //     'email.required' => 'Please Enter your Email',
        //     'email.email' => 'Please Enter a Valid Email',
        //     'username.required' => 'Enter your User Name',
        //     'city.required' => 'Please Enter your city name',
        //     'state.required' => 'Please Enter your state name',
        //     'zip.required' => 'Please Enter Your Zip Code'
        // ]
    );

        return $req;
    }
}
