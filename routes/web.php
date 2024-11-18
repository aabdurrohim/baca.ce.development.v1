<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'index'])->name('index');
Route::get('/dashboard', [BasicController::class, 'dashboard'])->name('dashboard.index');
