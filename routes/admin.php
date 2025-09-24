<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {


    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'edit'])->name('profile.edit');

    });


    Route::get('/', [AdminController::class, 'login'])->name('login');
    Route::post('/', [AdminController::class, 'loginsubmit'])->name('loginSubmit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
});


require __DIR__.'/auth.php';
