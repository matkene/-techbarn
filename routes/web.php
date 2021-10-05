<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('view-single-shop', [OrderController::class, 'shop'])->name('shop');
Route::post('/purchase', [OrderController::class, 'purchaseProduct'])->name('sale');
Route::get('view-shop', [OrderController::class, 'showPurchase'])->name('purchase-order');

Route::get('view-single-looked', [OrderController::class, 'looked'])->name('looked');
Route::post('looked', [OrderController::class, 'postLooked'])->name('liked');
Route::get('view-looked', [OrderController::class, 'showLooked'])->name('order-looked');

Route::get('view-single-wishlist', [OrderController::class, 'wishlist'])->name('wishlist');
Route::post('wishlist', [WishlistController::class, 'postWishlist'])->name('order-wishlist');
Route::get('view-wishlist', [WishlistController::class, 'showWishlist'])->name('view-wishlist');




Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');







