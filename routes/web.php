<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('index'));
Route::get('/contact', fn () => view('contact'));
