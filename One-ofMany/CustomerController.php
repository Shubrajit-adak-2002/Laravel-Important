<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function show(){
        $customer = customer::with('oldestOrder')->get();
        return $customer;
    }
}
