<?php

namespace App\Http\Controllers\Api;

use App\Helpers\ApiFormater;
use App\Http\Controllers\Controller;
use App\Services\Kendaraan\Services;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    private $kendaraanServices;
    public function __construct(Services $kendaraanServices)
    {
        $this->kendaraanServices = $kendaraanServices;
    }

    public function getAll()
    {
        $result = $this->kendaraanServices->getAll();

        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }

    public function getbyName($name)
    {
        $result = $this->kendaraanServices->getbyName($name);

        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }

    public function addKendaraan(Request $request)
    {
        $addMobil = $request->only([
            'name',
            'tahun_keluaran',
            'warna',
            'harga',
            'mesin',
            'kapasitas_penumpang',
            'tipe',
        ]);

        $addMotor = $request->only([
            'name',
            'tahun_keluaran',
            'warna',
            'harga',
            'mesin',
            'tipe_suspensi',
            'tipe_transmisi',
        ]);

        if ($request->kapasitas_penumpang)
        {
            $result = $this->kendaraanServices->addMobil($addMobil);
        }
        elseif($request->tipe_suspensi)
        {
            $result = $this->kendaraanServices->addMotor($addMotor);
        }
        
        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }


    public function updateKendaraan(Request $request, $id)
    {
        $id = $request->route('id');
        $updateMobil = $request->only([
            'name',
            'tahun_keluaran',
            'warna',
            'harga',
            'mesin',
            'kapasitas_penumpang',
            'tipe',
        ]);

        $updateMotor = $request->only([
            'name',
            'tahun_keluaran',
            'warna',
            'harga',
            'mesin',
            'tipe_suspensi',
            'tipe_transmisi',
        ]);

        $updateKendaraan = $request->only([
            'name',
            'tahun_keluaran',
            'warna',
            'harga',
            'mesin',
        ]);

        if ($request->kapasitas_penumpang || $request->tipe)
        {
            $result = $this->kendaraanServices->updateMobil($updateMobil, $id);
        }
        elseif($request->tipe_suspensi || $request->tipe_transmisi)
        {
            $result = $this->kendaraanServices->updateMotor($updateMotor, $id);
        }
        else
        {
            $result = $this->kendaraanServices->updateMotor($updateKendaraan, $id);
        }

        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
        
    }

    public function stok()
    {
        $result = $this->kendaraanServices->stokKendaraan();

        if ($result) {
            return ApiFormater::createApi(200, 'Succes', $result);
        }else{
            return ApiFormater::createApi(400, 'Not Found');
        }
    }

}
