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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/custom-user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['NotCheckAdmin'])->group(function () {
    Route::get('/custom-user', [HomeController::class, 'index']);
    // Add other routes that require the CheckNotAdmin middleware
});
Route::middleware(['CheckAdmin'])->group(function () {
    Route::get('/home-admin', [AdminController::class, 'index']);
    // Add other routes that require the CheckNotAdmin middleware
});