<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\UserController;
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


// Routing Users
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/form/{param}/{id}', 'form')->name('users.form');
    Route::post('/users/store', 'store')->name('users.store');
    Route::delete('/users/{id}', 'destroy')->name('users.destroy');
});


