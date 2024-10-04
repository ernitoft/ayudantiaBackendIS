<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Aquí puedes definir middlewares globales si es necesario
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Captura las excepciones de autenticación
        $exceptions->render(function (AuthenticationException $exception, $request) {
            if ($request->expectsJson()) {
                return response()->json(['error' => 'No autenticado.'], 401);
            }
            return response()->json(['error' => 'No autenticado.'], 401);

        });
    })
    ->create();

