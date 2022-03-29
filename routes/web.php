<?php

use App\Http\Controllers\UserController;
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
Route::prefix('user')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
});
