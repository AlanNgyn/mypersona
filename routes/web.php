<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('pages/home');
})->name('home');

Route::get('/brand/{id}', [BrandController::class, 'getBrand']);

Route::get('/cart', function () {
    return view('pages/cart');
});

Route::get('/persona-thrift', function () {
    return view('pages/persona-thrift');
});

Route::get('/list-wishlist', function () {
    return view('pages/list-wishlist');
});

Route::get('/luxury', function () {
    return view('pages/luxury');
});

Route::get('/pdp/{id}', [ProductController::class, 'getProduct']);

Route::get('/category-page/{id}', [CategoryController::class, 'getCategory']);

Route::get('/brand-listing', function () {
    return view('pages/brand-listing');
});

Route::get('/my-account', function () {
    return view('pages/my-account');
});

Route::get('/my-account/order-history', function () {
    return view('pages/my-account/order-history');
});

Route::get('/my-account/profile', function () {
    return view('pages/my-account/profile');
});

Route::get('/my-account/brand', function () {
    return view('pages/my-account/brand');
});

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
