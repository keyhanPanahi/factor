<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
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
})->name('home');

//User
Route::prefix('customer')->group(function() {
    Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/show/{customer}', [CustomerController::class, 'show'])->name('customer.show');
    Route::get('/create', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/edit/{customer}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/update/{customer}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/destroy/{customer}', [CustomerController::class, 'destroy'])->name('customer.destroy');
});
Route::prefix('factor')->group(function() {
    Route::get('/', [FactorController::class, 'index'])->name('factor.index');
    Route::get('/show/{factor}', [FactorController::class, 'show'])->name('factor.show');
    Route::get('/create', [FactorController::class, 'create'])->name('factor.create');
    Route::post('/store', [FactorController::class, 'store'])->name('factor.store');
    Route::get('/edit/{factor}', [FactorController::class, 'edit'])->name('factor.edit');
    Route::put('/update/{factor}', [FactorController::class, 'update'])->name('factor.update');
    Route::delete('/destroy/{factor}', [FactorController::class, 'destroy'])->name('factor.destroy');
});
Route::prefix('product')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/show/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
});
Route::prefix('item')->group(function() {
    Route::get('/{factor}', [ItemController::class, 'index'])->name('item.index');
    Route::get('/show/{item}', [ItemController::class, 'show'])->name('item.show');
    Route::get('/create/{factor}', [ItemController::class, 'create'])->name('item.create');
    Route::post('/store/{factor}', [ItemController::class, 'store'])->name('item.store');
    Route::get('/edit/{factor}/{item}', [ItemController::class, 'edit'])->name('item.edit');
    Route::put('/update/{factor}/{item}', [ItemController::class, 'update'])->name('item.update');
    Route::delete('/destroy/{item}', [ItemController::class, 'destroy'])->name('item.destroy');
});
