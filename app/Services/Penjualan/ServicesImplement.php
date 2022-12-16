<?php

namespace App\Services\Penjualan;

use App\Repository\Penjualan\Repository;
use Illuminate\Support\Facades\Log;
use Exception;

class ServicesImplement implements Services
{
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();    
    }

    public function penjualan($addPenjualan)
    {
        try{
            return $this->repository->penjualan($addPenjualan);
        }catch(Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }
    }

    public function laporanPenjualan($kendaraan)
    {
        try{
            return $this->repository->laporanPenjualan($kendaraan);
        }catch(Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }
    }
}