<?php

use Illuminate\Support\Facades\Route;

// Route 1: Simple route that returns a message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route 2: Route that calls a method in GreetController
Route::get('/greet', [App\Http\Controllers\GreetController::class, 'showGreet']);