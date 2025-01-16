<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActorController;

// Root route - toont de lijst van media
Route::get('/', [MediaController::class, 'index'])->name('home');

// Resource routes voor media en acteurs
Route::resource('media', MediaController::class);
Route::resource('actors', ActorController::class);

// Zoekroute
Route::get('/search', [MediaController::class, 'search'])->name('media.search');