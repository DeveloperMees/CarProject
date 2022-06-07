<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BrandController;

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'homepage']);
Route::get('/dashboard', [\App\Http\Controllers\PageController::class, 'dashboard'])->name('/dashboard');

Route::get('/login', [AuthController::class, 'login'])->name('/login');
Route::post('/session', [AuthController::class, 'session'])->name('session');
Route::get('/login/logout', [AuthController::class, 'logout'])->name('/logout');

Route::get('/register', [RegisterController::class, 'create'])->name('/register')->middleware('guest');
Route::post('/register/store', [RegisterController::class, 'store'])->name('/register/store')->middleware('guest');


// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('/dashboard');


// Dashboard brands routes
Route::get('/brands', [DashboardController::class, 'brands'])->name('/brands');
Route::get('/brands/create', [BrandController::class, 'create'])->name('/brands/create');
Route::post('/brands/store', [BrandController::class, 'store'])->name('/brands/store');

Route::get('/brands/{id}/edit', [BrandController::class, 'edit'])->name('/brands/edit');
Route::put('/brands/update/{id}', [BrandController::class, 'update'])->name('/brands/update');
Route::put('/brands/delete/{id}', [BrandController::class, 'delete'])->name('/brands/delete');

Route::get('/brands/results/{query}', [BrandController::class, 'getResults']);
