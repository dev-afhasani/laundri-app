<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PriceListController;
use App\Http\Controllers\Admin\ServiceTypeController;

Route::get('/', [DashboardController::class, 'index'])->name('index');
Route::get('/members', [MemberController::class, 'index'])->name('members.index');

Route::group([
  'prefix' => 'price-lists',
  'as' => 'price-lists.',
], function () {
  Route::get('/', [PriceListController::class, 'index'])->name('index');
  Route::post('/', [PriceListController::class, 'store'])->name('store');
  Route::get('/{priceList}', [PriceListController::class, 'show'])->name('show');
  Route::patch('/{priceList}', [PriceListController::class, 'update'])->name('update');
});

Route::post('/items', [ItemController::class, 'store'])->name('items.store');

Route::post('/services', [ServiceController::class, 'store'])->name('services.store');

Route::group([
  'prefix' => 'service-types',
  'as' => 'service-types.',
], function () {
  Route::get('/{serviceType}', [ServiceTypeController::class, 'show'])->name('show');
  Route::patch('/{serviceType}', [ServiceTypeController::class, 'update'])->name('update');
});
