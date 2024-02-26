<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;


Route::get('/', [HomeController::class, 'home'])->name('home');


Route::prefix('category')->group(function () {
    Route::get('food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('home-care', [ProductsController::class, 'homeCare']);
    Route::get('baby-kid', [ProductsController::class, 'babyKid']);
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');


Route::get('/sales', [SalesController::class, 'pos'])->name('sales.pos');
