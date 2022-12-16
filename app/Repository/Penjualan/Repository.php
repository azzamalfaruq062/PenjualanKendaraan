<?php

namespace App\Repository\Penjualan;

interface Repository
{
    public function getAll();
    public function penjualan($addPenjualan);
    public function laporanPenjualan($kendaraan);
}