<?php

namespace App\Services\Kendaraan;

interface Services
{
    public function getAll();
    public function getbyName($name);
    public function addMobil(array $addMobil);
    public function addMotor(array $addMotor);
}