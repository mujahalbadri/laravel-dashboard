<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::middleware('checkRole:staff')->group(function () {
        Route::resource('barang', BarangController::class, ['except' => ['index']]);
    });

    Route::resource('barang', BarangController::class, ['only' => ['index']]);

    Route::get('staff', [StaffController::class, 'index'])->name('staff.index')->middleware('checkRole:staff');

    Route::get('owner', [OwnerController::class, 'index'])->name('owner.index')->middleware('checkRole:owner');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});
