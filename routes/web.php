<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use function Pest\Laravel\get;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::resource('/users', UserController::class);
