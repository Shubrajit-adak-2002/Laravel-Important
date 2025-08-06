<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sessionIndex()
    {
        // checking how many session's are available
        $session = session()->all();

        // printing session's
        echo "<pre>";
        print_r($session);
        echo "</pre>";
    }

    public function sessionStore(Request $req)
    {
        // storing session or creating session (use this when u want to create a simple session use this method, otherwise use the below method)
        session(['name'=>'Shubrajit Adak']);
        // Another method of storing or creating session (u can use this method with request class also)
        $req->session()->put(['age'=>23]);

        // Reading session or checking session value
        // $value = session('name');
        // echo $value;

        // Another method of reading session
        $value = session()->get('name');
        echo $value;
    }

    public function deleteSession()
    {
        // use this method when you want to delete single or multiple session and when you want to delete all session use flush() method,it doesn't need any parameter
        session()->forget(['name','age']);
        return redirect('/');
    }

    // Note: There are many session methods, if you want know further go to larave's session documentation
}
