<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\KendaraanController;
use App\Http\Controllers\Api\PenjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('kendaraan', [KendaraanController::class, 'getAll']);
Route::get('kendaraan/{name}', [KendaraanController::class, 'getbyName']);
Route::post('kendaraan/add', [KendaraanController::class, 'addKendaraan']);
Route::put('kendaraan/update/{id}', [KendaraanController::class, 'updateKendaraan']);
Route::get('stok', [KendaraanController::class, 'stok']);

Route::post('penjualan', [PenjualanController::class, 'penjualan']);
Route::get('laporan/all', [PenjualanController::class, 'getAll']);
Route::get('laporan/{kendaraan}', [PenjualanController::class, 'laporanPenjualan']);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/user', [AuthController::class, 'user'])->name('user');
