<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        // If login fails
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->onlyInput('email');
    }

    public function dashboard()
    {
        // This is the first syntax of Gates
        // if (Gate::allows('isAdmin')) {
        //     return view('dashboard');
        // } else {
        //     echo "Access Denied";
        // }

        // This is the second and easiest syntax for Gates
        // Gate::authorize('isAdmin');
        return view('dashboard');

    }

    public function post(int $id)
    {
        $posts = Post::where('user_id',Auth::id())->get();
        return view('post',compact('posts'));
    }

    public function profile(int $id)
    {
        Gate::authorize('profile',$id);
        $user = user::findorfail($id);
        return view('profile',compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('loginPage');
    }

    public function admin()
    {
        return view('admin');
    }

    public function other()
    {
        return view('other');
    }
}
