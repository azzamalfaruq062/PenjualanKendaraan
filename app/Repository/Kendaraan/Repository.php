<?php

namespace App\Repository\Kendaraan;

interface Repository
{
    public function getAll();
    public function getbyName($name);
}