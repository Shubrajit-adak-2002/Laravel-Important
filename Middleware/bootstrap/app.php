<?php

use App\Http\Middleware\Test;
use App\Http\Middleware\ValidUserAge;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Here middleware alias
        $middleware->alias([
            'userAge'=>ValidUserAge::class
        ]);

        // Here we are creating midllware group with a name
        $middleware->appendToGroup('ok',[
            ValidUserAge::class,
            Test::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
