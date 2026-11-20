<?php

use App\Http\Controllers\AuthController; 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;

Route::middleware('guest')->group(function () { 
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login'); 
    Route::post('/login', [AuthController::class, 'login'])->name('login.store'); 
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register'); 
    Route::post('/register', [AuthController::class, 'register'])->name('register.store'); 
}); 
 
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout'); 

Route::get('/', function () {
    return view('welcome');
})->name('shop.index');

Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('categories', AdminCategoryController::class)
            ->except('show');

        Route::resource('products', AdminProductController::class)
            ->except('show');
    });
