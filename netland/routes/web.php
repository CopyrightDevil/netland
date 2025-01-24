<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ActorController;

Route::get('/media/search', [MediaController::class, 'search'])->name('media.search');
Route::get('/media/omdb/{imdbId}', [MediaController::class, 'showDetails'])->name('media.details');

// Resource routes voor media (zonder show-route)
Route::resource('media', MediaController::class)->except(['show']);