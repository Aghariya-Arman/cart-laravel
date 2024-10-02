<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('show');
// });
Route::get('/', [ProductController::class, 'index1'])->name('products');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{product}', [ProductController::class, 'addtocart'])->name('addcart');
Route::get('/remove/{id}', [ProductController::class, 'removeFromcart'])->name('remove');
