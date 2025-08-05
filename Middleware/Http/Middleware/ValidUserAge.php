<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidUserAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Checks the user database age column
        $user = $request->user();
        echo "<h1>Hello</h1>";
        if ($user->age > 18) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }

    }

    // When the middleware work done this function exexcutes
    public function terminate(Request $req,Response $res) : void{
        echo "Middleware finished";
    }
}
