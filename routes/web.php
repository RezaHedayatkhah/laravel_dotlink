<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClickController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UrlController;
use App\Http\Controllers\WithdrawReceiptController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => 'guest'], function(){
    Route::get('/register', [AuthController::class, 'register'])->name('registerView');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('loginView');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/settings', 'settings')->name('settings');
    Route::resource('/urls', UrlController::class);
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [AuthController::class, 'show_profile'])->name('show_profile');
    Route::put('/profile', [AuthController::class, 'edit_profile'])->name('edit_profile');
    Route::get('/withdraw', [WithdrawReceiptController::class, 'index'])->name('withdrawView');
    Route::post('/withdraw', [WithdrawReceiptController::class, 'withdraw'])->name('withdraw');
});

Route::get('/{url_code}', [ClickController::class, 'click'])->name('click');
Route::post('/{url_code}', [ClickController::class, 'adClick'])->name('adclick');
