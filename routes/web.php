<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});


// Sign In Routes
Route::get('/signin', [App\Http\Controllers\SignInController::class, 'create']);
Route::post('/signin', [App\Http\Controllers\SignInController::class, 'authenticate']);

// Sign Up Routes
Route::get('/signup', [App\Http\Controllers\SignUpController::class, 'create']);
Route::post('/signup', [App\Http\Controllers\SignUpController::class, 'store']);

// Dashboard Route
Route::get('/dashboard', function () {
    if (!Session::has('user_id')) {
        return redirect('/signin')->with('error', 'Please sign in first.');
    }
    return view('dashboard');
});

// Logout Route
Route::get('/logout', [App\Http\Controllers\SignInController::class, 'logout']);

// Todo Routes
Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('/todos', [App\Http\Controllers\TodoController::class, 'store']);
Route::get('/todos/{id}/edit', [App\Http\Controllers\TodoController::class, 'edit']);
Route::put('/todos/{id}', [App\Http\Controllers\TodoController::class, 'update']);
Route::delete('/todos/{id}', [App\Http\Controllers\TodoController::class, 'destroy']);
