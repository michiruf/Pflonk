<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::view('/', 'index')->name('index');
Route::view('/products', 'products')->name('products');
Route::view('/contact', 'contact')->name('contact');
Route::view('/location', 'location')->name('location');
Route::view('/service', 'service')->name('service');

// Legal stuff
Route::view('/imprint', 'static.imprint')->name('imprint');
Route::view('/privacy', 'static.privacy')->name('privacy');

// Filament
Route::redirect('/login', '/admin/login')->name('login'); // filament needs a 'login' route after logout

// Health
Route::get('health', HealthCheckResultsController::class);
Route::get('health.json', HealthCheckJsonResultsController::class);
