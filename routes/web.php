<?php

use App\Livewire\Home;
use App\Livewire\PrivateSectorHub;
use Illuminate\Support\Facades\Route;

Route::localized(function () {
    Route::get('/', Home::class)->name('home');
    Route::get('/private-sector-hub', PrivateSectorHub::class)->name('private-sector-hub');
});

Route::redirect('/login', '/dashboard/login')->name('login');

Route::fallback(\CodeZero\LocalizedRoutes\Controllers\FallbackController::class);
