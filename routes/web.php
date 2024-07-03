<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mancore', [App\Http\Controllers\MancoreController::class, 'index'])->name('mancore');
Route::get('/mancore/search', [App\Http\Controllers\MancoreController::class, 'search'])->name('mancore.search');
Route::get('/odp', [App\Http\Controllers\MancoreController::class, 'index'])->name('odp');
