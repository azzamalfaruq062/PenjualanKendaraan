<?php

namespace App\Repository\Penjualan;

use App\Models\penjualan;

class RepositoryImplement implements Repository
{
    private $model;
    public function __construct(penjualan $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function penjualan($addPenjualan)
    {
        return $this->model->create($addPenjualan);
    }

    public function laporanPenjualan($kendaraan)
    {
        return $this->model->where('kendaraan', $kendaraan)->get();
    }
}