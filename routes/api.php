<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::post('/checkout', [MainController::class, 'checkout'])->name('checkout');
