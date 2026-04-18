<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/explore', function () {
    return view('explore');
});

Route::get('/donate', [\App\Http\Controllers\DonationController::class, 'index'])->middleware('auth')->name('donate');
Route::post('/donate/food', [\App\Http\Controllers\DonationController::class, 'storeFood'])->middleware('auth')->name('donations.food.store');
Route::post('/donate/clothing', [\App\Http\Controllers\DonationController::class, 'storeClothing'])->middleware('auth')->name('donations.clothing.store');



Route::get('/impact', function () {
    return view('impact');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::post('/newsletter', [\App\Http\Controllers\NewsletterController::class, 'store'])->name('newsletter.subscribe');


require __DIR__.'/auth.php';


