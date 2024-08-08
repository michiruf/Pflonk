<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

Route::get('/', fn () => view('index'));
Route::get('/contact', fn () => view('contact'));

// Legal stuff
Route::get('/cookie-policy', fn () => view('static.cookie-policy'));
Route::get('/privacy-policy', fn () => view('static.privacy-policy'));
Route::get('/terms-of-use', fn () => view('static.terms-of-use'));

// Filament
Route::redirect('/login', '/admin/login')->name('login'); // filament needs a 'login' route after logout

// Health
Route::get('health', HealthCheckResultsController::class);
Route::get('health.json', HealthCheckJsonResultsController::class);
