<?php

use App\Http\Controllers\KamarController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/kamar', [KamarController::class, 'index']);
Route::get('/kamar/create', [KamarController::class, 'create']);
Route::post('/kamar', [KamarController::class, 'store']);

Route::get('/tipe', [TipeController::class, 'index']);
Route::get('/tipe/create', [TipeController::class, 'create']);
Route::post('/tipe', [TipeController::class, 'store']);
Route::get('/tipe/{tipe}', [TipeController::class, 'destroy']);
Route::put('/tipe/{tipe}', [TipeController::class, 'update']);
Route::get('/tipe/{tipe}/edit', [TipeController::class, 'edit']);




