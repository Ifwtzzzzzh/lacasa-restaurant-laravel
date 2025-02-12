<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/restaurant', [UserController::class, 'restaurant'])->name('restaurant');
Route::get('/reservation', [UserController::class, 'reservation'])->name('reservation');
Route::get('/benefit', [UserController::class, 'benefit'])->name('benefit');
Route::get('/article', [UserController::class, 'article'])->name('article');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/article', [UserController::class, 'article'])->name('article');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'role:admin']);
Route::get('/user/dashboard', [UserController::class, 'dashboard'])
    ->name('user.dashboard')
    ->middleware(['auth', 'role:user']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';