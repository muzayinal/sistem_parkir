<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [Home::class, 'index']);
Route::get('/daftar_member', [Home::class, 'daftar_member']);
Route::get('/perpanjang_member', [Home::class, 'perpanjang_member']);
Route::get('/data_member', [Home::class, 'data_member']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [Dashboard::class, 'index']);
