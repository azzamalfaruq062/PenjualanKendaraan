<?php

namespace App\Services\Penjualan;

interface Services
{
    public function getAll();
    public function penjualan($addPenjualan);
    public function laporanPenjualan($kendaraan);
}