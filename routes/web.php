<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name('welcome');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('sign-in-google', [AuthController::class, 'google_oauth'])->name('login.google');
Route::get('auth/google/callback', [AuthController::class, 'handleProviderCallback'])->name('user.google.callback');

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('checkout', function () {
    return view('transactions.checkout');
})->name('checkout');

Route::get('success-checkout', function () {
    return view('transactions.success_checkout');
})->name('success-checkout');
