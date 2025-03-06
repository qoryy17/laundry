<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\DashboardController;
use App\Livewire\Test;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', [SigninController::class, 'index'])->name('signin');

// Route::get('/home', Test::class);

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
});
