<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::view('/', 'index')->name('index');
Route::view('/location', 'location')->name('location');
Route::view('/products', 'products')->name('products');
Route::view('/hermes', 'hermes')->name('hermes');
Route::view('/feast-service', 'feast-service')->name('feast-service');
Route::view('/delivery-service', 'delivery-service')->name('delivery-service');
Route::view('/contact', 'contact')->name('contact');

// Legal stuff
Route::view('/imprint', 'imprint')->name('imprint');
Route::view('/privacy', 'privacy')->name('privacy');

// Filament
Route::redirect('/login', '/admin/login')->name('login'); // filament needs a 'login' route after logout

// Health
Route::get('health', HealthCheckResultsController::class);
Route::get('health.json', HealthCheckJsonResultsController::class);
