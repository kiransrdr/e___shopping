<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UserAuth;

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
Route::get('/about', function () {
    return view('about');
});
Route::get('/adminpanel2', function () {
    return view('adminpanel2');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/ses', function () {
    return view('ses');
});
Route::get('/logout', function () {
    if(session()->has('user')){
        session()->forget('user');
    }
    if(session()->has('email')){
        session()->forget('email');
    }
    if(session()->has('phone')){
        session()->forget('phone');
    }
    return redirect('home');
});
Route::get('/newlogin', function () {
    return view('newlogin');
});
Route::get('/Product', function () {
    return view('Product');
});
Route::get('/resetpassword', function () {
    return view('resetpassword');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/singleproduct', function () {
    return view('singleproduct');
});

Route::resource('signup', PostController::class);

Route::resource('products', ProductController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('user', [UserAuth::class, 'userLogin']);