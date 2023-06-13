<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Member\DashboardController;

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

Route::get('/', function () {
  return view('home');
});

// Route::get('/', [HomeController::class, 'index']);

Route::get('register', [RegisterController::class, 'show'])->name('register.show');
Route::post('register', [RegisterController::class, 'register'])->name('register.register');

Route::get('login', [LoginController::class, 'show'])->name('login.show')->middleware('islogin');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('logout', [LoginController::class, 'logout'])->name('login.logout');
