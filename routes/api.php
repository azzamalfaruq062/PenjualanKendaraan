<?php

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
Route::get('stokKendaraan', [KendaraanController::class, 'lihatStokKendaraan']);

Route::get('all', [PenjualanController::class, 'getAll']);
Route::post('penjualan', [PenjualanController::class, 'penjualan']);
Route::get('laporan/{kendaraan}', [PenjualanController::class, 'laporanPenjualan']);
