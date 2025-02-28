<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Default homepage route (optional)
Route::get('/', function () {
    return view('welcome');
});

// First route: Directly return a message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Second route: Calls the GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'index']);

// Resource route for TaskController (Handles CRUD operations)
Route::resource('tasks', TaskController::class);