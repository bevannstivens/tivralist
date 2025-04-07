<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login.attempt');
Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register.attempt');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');