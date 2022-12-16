<?php

namespace App\Repository\Kendaraan;

use App\Models\Kendaraan;

class RepositoryImplement implements Repository
{
    private $model;
    public function __construct(Kendaraan $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getbyName($name)
    {
        return $this->model->where('name', $name)->get();
    }

    public function addMobil(array $addMobil)
    {
        return $this->model->create($addMobil);
    }
    public function addMotor(array $addMotor)
    {
        return $this->model->create($addMotor);
    }

}