<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
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

Route::get('/', [SiteController::class, 'index']);


Route::get('/view/{id}', [AdminController::class, 'view']);
Route::post('/delete/{id}', [AdminController::class, 'delete']);
Route::post('/changeRole/{id}', [AdminController::class, 'changeRole']);
Route::post('/delete_me/{id}', [AdminController::class, 'deleteMe']);


Route::match(['get', 'post'], '/edit', [SiteController::class, 'edit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('{error}', [SiteController::class, 'error']);
