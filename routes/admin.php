<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {


    Route::get('/', [AdminController::class, 'login'])->name('login');
    Route::post('/', [AdminController::class, 'loginsubmit'])->name('loginSubmit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/profile', [AdminController::class, 'edit'])->name('profile.edit');

        // Products
        Route::resource('products', ProductController::class);


    });

});


require __DIR__.'/auth.php';
