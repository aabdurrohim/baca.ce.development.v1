<?php

use App\Http\Controllers\BasicController;
use App\Http\Controllers\mahasiswa\LoginController;
use App\Http\Controllers\mahasiswa\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'welcome'])->name('welcome');
Route::get('/base', [BasicController::class, 'index'])->name('index');
Route::get('/dashboard', [BasicController::class, 'dashboard'])->name('dashboard.index');

// LoginController
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
// RegisterController

Route::get('/register', [RegisterController::class, 'index'])->name('login.create');