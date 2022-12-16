<?php

namespace App\Repository\Kendaraan;

interface Repository
{
    public function getAll();
    public function getbyName($name);
    public function addMobil(array $addMobil);
    public function addMotor(array $addMotor);
}