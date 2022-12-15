<?php

namespace App\Services\Kendaraan;

use App\Repository\Kendaraan\Repository;
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
        try{
            return $this->repository->getAll();
        }catch(Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }
    }

    public function getByName($name)
    {
        try{
            return $this->repository->getByName($name);
        }catch(Exception $exception){
            Log::debug($exception->getMessage());
            return [];
        }
    }
}