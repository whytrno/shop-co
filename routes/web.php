<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/item-detail/{id}', [MainController::class, 'detail'])->name('detail');
Route::middleware('auth')->group(function () {
    Route::get('/cart', [MainController::class, 'cart'])->name('cart');
    Route::post('/cart', [MainController::class, 'addToCart'])->name('add-to-cart');
    Route::get('/remove-cart/{id}', [MainController::class, 'removeCart'])->name('remove-cart');
    Route::post('/update-cart/{id}', [MainController::class, 'updateCart'])->name('update-cart');

    Route::get('/history', [MainController::class, 'history'])->name('history');
    Route::get('/history/{id}', [MainController::class, 'historyDetail'])->name('historyDetail');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::post('/login', [AuthController::class, 'login'])->name('login');
