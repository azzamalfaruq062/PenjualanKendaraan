<?php

namespace App\Http\Controllers\Api;

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
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
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
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }

    public function laporanPenjualan($kendaraan)
    {
        $result = $this->penjualanServices->laporanPenjualan($kendaraan);
        return response()->json([
            'success' => true,
            'code' => 200,
            'data' => $result,
        ]);
    }
}
