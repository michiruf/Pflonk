<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('index'));
Route::get('/contact', fn () => view('contact'));

// Legal stuff
Route::get('/cookie-policy', fn () => view('static.cookie-policy'));
Route::get('/privacy-policy', fn () => view('static.privacy-policy'));
Route::get('/terms-of-use', fn () => view('static.terms-of-use'));
