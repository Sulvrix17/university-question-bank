<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/users', [UserController::class, 'store'])->name('users.store');
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::get('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
        Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    });
    Route::fallback(function () {
        return response()->view('errors.404', [], 404);
    });
});
