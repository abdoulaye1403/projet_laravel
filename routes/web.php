<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(PageController::class)->group(function () {
    Route::get('/produit', [PageController::class, 'produit'])->name('page.produit');
    Route::get('/infos', [PageController::class, 'info'])->name('page.info');
    Route::get('/contact', [PageController::class, 'contact'])->name('page.contact');
});



require __DIR__.'/auth.php';
