<?php

use App\Http\Controllers\AuthController; 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

use App\Http\Controllers\Admin\ProductController as AdminProductController;

use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\ShippingServiceController;

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

        // M3 - Barang masuk dan histori stok
Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
Route::get('/stock/create', [StockController::class, 'create'])->name('stock.create');
Route::post('/stock', [StockController::class, 'store'])->name('stock.store');

// M3 - Layanan ekspedisi
Route::get('/shipping', [ShippingServiceController::class, 'index'])->name('shipping.index');
Route::post('/shipping', [ShippingServiceController::class, 'store'])->name('shipping.store');
Route::put('/shipping/{shippingService}', [ShippingServiceController::class, 'update'])->name('shipping.update');
Route::delete('/shipping/{shippingService}', [ShippingServiceController::class, 'destroy'])->name('shipping.destroy');
    });
