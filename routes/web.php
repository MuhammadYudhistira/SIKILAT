<?php

use App\Http\Controllers\KamarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\TipeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/transaksi/{kamar}/checkin', [HomeController::class, 'create']);
Route::post('/transaksi/{kamar}/', [HomeController::class, 'store']);


Route::get('/auth/login', [AuthController::class, 'index']);
Route::post('/auth', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);

Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/kamar/create', [KamarController::class, 'create']);
Route::post('/kamar', [KamarController::class, 'store']);
Route::get('/kamar/{kamar}', [KamarController::class, 'destroy']);
Route::put('/kamar/{kamar}', [KamarController::class, 'update']);
Route::get('/kamar/{kamar}/edit', [KamarController::class, 'edit']);

Route::get('/tipe', [TipeController::class, 'index']);
Route::get('/tipe/create', [TipeController::class, 'create']);
Route::post('/tipe', [TipeController::class, 'store']);
Route::get('/tipe/{tipe}', [TipeController::class, 'destroy']);
Route::put('/tipe/{tipe}', [TipeController::class, 'update']);
Route::get('/tipe/{tipe}/edit', [TipeController::class, 'edit']);

Route::get('/tamu', [TamuController::class, 'index']);
Route::get('/tamu/{tamu}/detail', [TamuController::class, 'detail']);
Route::get('/tamu/{tamu}/checkout', [TamuController::class, 'checkout']);
Route::get('/tamu/{tamu}/destroy', [TamuController::class, 'destroy']);


Route::get('/home', [HomeController::class, 'index']);


