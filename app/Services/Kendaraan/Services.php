<?php

namespace App\Services\Kendaraan;

interface Services
{
    public function getAll();
    public function getbyName($name);
    public function addMobil(array $addMobil);
    public function addMotor(array $addMotor);
    public function updateMobil(array $updateMobil, $id);
    public function updateMotor(array $updateMotor, $id);
    public function stokKendaraan();
}