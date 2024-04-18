<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin/login');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::get('/users/view-change-password/{user}', [UserController::class, 'viewChangePassword'])->name('users.view-change-password');
    Route::post('/users/change-password/{user}', [UserController::class, 'changePassword'])->name('users.change-password');

    Route::resource('news', NewsController::class);

    Route::resource('categories', CategoryController::class);
    Route::post('/categories/get-sub-categories', [CategoryController::class, 'getSubCategories']);

    Route::get('/users/view-change-password/{user}', [UserController::class, 'viewChangePassword'])->name('users.view-change-password');
    Route::post('/users/change-password/{user}', [UserController::class, 'changePassword'])->name('users.change-password');
});
require __DIR__.'/auth.php';
