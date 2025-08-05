<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function registerSave(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed',
        ]);

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);

        $user->save();
    }

    function logging(Request $req){
        $credentials = $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Invalid credentials.');
    }

    function dashboard(){
        if (Auth::check()) {
            return view('dashboard');
        }else{
            return redirect()->route('login');
        }
    }
}
