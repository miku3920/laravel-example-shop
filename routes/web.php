<?php

declare(strict_types=1);

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('auth')->group(function (): void {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
});

require __DIR__ . '/auth.php';


Route::prefix('products')->group(function (): void {
    Route::get('/', [ProductController::class, 'index'])
        ->name('products.index');
    Route::get('/{id}', [ProductController::class, 'show'])
        ->whereNumber('id')
        ->name('products.show');
    Route::get('/{id}-{slug}', [ProductController::class, 'show'])
        ->whereNumber('id')
        ->name('products.show');
});

Route::get('/{category}/{sub_category?}', [ProductController::class, 'category'])->name('products.category');
