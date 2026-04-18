<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\NewsletterController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dynamic Discovery Route
Route::get('/explore', [ExploreController::class, 'index'])->name('explore');

// Donation Hub Routes
Route::get('/donate', [DonationController::class, 'index'])->middleware('auth')->name('donate');
Route::post('/donate/food', [DonationController::class, 'storeFood'])->middleware('auth')->name('donations.food.store');
Route::post('/donate/clothing', [DonationController::class, 'storeClothing'])->middleware('auth')->name('donations.clothing.store');
Route::post('/donate/organization', [DonationController::class, 'storeOrganization'])->middleware('auth')->name('organization.store');


// Community & Mission Routes
Route::get('/impact', function () {
    return view('impact');
})->name('impact');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Admin & Backend
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('admin.dashboard');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

require __DIR__.'/auth.php';
