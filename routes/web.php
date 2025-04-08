<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthenticationController::class, 'login'])->name('login.attempt');
Route::get('/register', [AuthenticationController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthenticationController::class, 'register'])->name('register.attempt');
Route::post('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function() {
    Route::resource('lists', ListController::class);

    Route::post('/lists/{list}', [TaskController::class, 'store'])->name('tasks.store');
    Route::put('/lists/{list}/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/lists/{list}/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::put('/lists/{list}/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
});