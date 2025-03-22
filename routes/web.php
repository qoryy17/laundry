<?php

use App\Livewire\Test;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Promo\PromoServiceController;
use App\Http\Controllers\Laundry\LaundryItemController;
use App\Http\Controllers\Membership\MembershipController;

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


// Routing Memberships
Route::controller(MembershipController::class)->group(function () {
    Route::get('/membership', 'index')->name('membership.index');
    Route::get('/membership/form/{param}/{id}', 'form')->name('membership.form');
    Route::post('/membership/store', 'store')->name('membership.store');
    Route::delete('/membership/{id}', 'destroy')->name('membership.destroy');
});

// Routing Laundry Items
Route::controller(LaundryItemController::class)->group(function () {
    Route::get('/laundry-item', 'index')->name('laundry-item.index');
    Route::get('/laundry-item/form/{param}/{id}', 'form')->name('laundry-item.form');
    Route::post('/laundry-item/store', 'store')->name('laundry-item.store');
    Route::delete('/laundry-item/{id}', 'destroy')->name('laundry-item.destroy');
});


// Routing Promo Service
Route::controller(PromoServiceController::class)->group(function () {
    Route::get('/promo-service', 'index')->name('promo-service.index');
    Route::get('/promo-service/form/{param}/{id}', 'form')->name('promo-service.form');
    Route::post('/promo-service/store', 'store')->name('promo-service.store');
    Route::delete('/promo-service/{id}', 'destroy')->name('promo-service.destroy');
});
