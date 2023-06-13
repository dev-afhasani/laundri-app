<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Member\DashboardController;


Route::get('/', [DashboardController::class, 'index'])->name('index');
