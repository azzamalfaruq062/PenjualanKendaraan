<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormater;
use App\Http\Controllers\Controller;
use App\Services\Penjualan\Services;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    private $penjualanServices;
    public function __construct(Services $penjualanServices)
    {
        $this->penjualanServices = $penjualanServices;
    }

    public function getAll()
    {
        $result = $this->penjualanServices->getAll();
        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }

    public function penjualan(Request $request)
    {
        $addPenjualan = $request->only([
            'pembeli',
            'tanggal_beli',
            'kendaraan',
            'name_kendaraan',
            'tahun_keluaran',
        ]);
        $result = $this->penjualanServices->penjualan($addPenjualan);
        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }

    public function laporanPenjualan($kendaraan)
    {
        $result = $this->penjualanServices->laporanPenjualan($kendaraan);
        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }
}
