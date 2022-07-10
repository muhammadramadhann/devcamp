<?php

use App\Http\Controllers\Auth\AuthenticationController as Authentication;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    // authentication
    Route::get('login', [Authentication::class, 'index_login'])->name('login');
    Route::post('login', [Authentication::class, 'store_login'])->name('login');
    Route::get('register', [Authentication::class, 'index_register'])->name('register');
    Route::post('register', [Authentication::class, 'store_register'])->name('register');
    Route::get('sign-in-google', [Authentication::class, 'google_oauth'])->name('login.google');
    Route::get('auth/google/callback', [Authentication::class, 'handleProviderCallback'])->name('user.google.callback');
});

Route::middleware('auth')->group(function () {
    // checkout
    Route::get('checkout/success', [CheckoutController::class, 'index'])->name('transaction.success');
    Route::get('checkout/{camp:slug}', [CheckoutController::class, 'create'])->name('transaction.checkout');
    Route::post('checkout/{camp}', [CheckoutController::class, 'store'])->name('transaction.checkout.store');

    // dashboard user
    Route::get('dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

    Route::post('logout', [Authentication::class, 'logout'])->name('logout');
});
