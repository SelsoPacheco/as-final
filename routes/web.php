<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkshopController;
use App\Models\Workshop;
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

require __DIR__.'/auth.php';

Route::get('workshops', [WorkshopController::class, 'index'])->middleware(['auth', 'verified'])->name('index-workshops');
Route::get('workshops/create', [WorkshopController::class, 'create'])->middleware(['auth', 'verified'])->name('index-workshops');
Route::post('workshops', [WorkshopController::class, 'store'])->middleware(['auth', 'verified'])->name('index-workshops');
Route::get('workshops/{id}/edit', [WorkshopController::class, 'edit'])->middleware(['auth', 'verified'])->name('index-workshops');
Route::put('workshops/{id}', [WorkshopController::class, 'update'])->middleware(['auth', 'verified'])->name('index-workshops');
Route::delete('workshops/{id}', [WorkshopController::class, 'destroy'])->middleware(['auth', 'verified'])->name('index-workshops');
