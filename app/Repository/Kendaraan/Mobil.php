<?php

namespace App\Repository\Kendaraan;


use App\Repository\Kendaraan\Kendaraan;


// Mobil is Overriding inherited method from Kendaraan
class Mobil extends Kendaraan
{
  public $mesin;
  public $kapasitas_penumpang;
  public $tipe;
  public function __construct($name = 'name', $tahun_keluaran = 'tahun_keluaran', $warna = 'warna', $harga = 'harga', $mesin = 'mesin', $kapasitas_penumpang = 'kapasitas_penumpang', $tipe = 'tipe')
  {
    $this->name = $name;
    $this->tahun_keluaran = $tahun_keluaran;
    $this->warna = $warna;
    $this->harga = $harga;
    $this->mesin = $mesin;
    $this->kapasitas_penumpang = $kapasitas_penumpang;
    $this->tipe = $tipe;
  }

  public function mobil()
  {
    $mobil = "'$this->name'," . "'$this->tahun_keluaran',"."'$this->warna',"."'$this->harga',"."'$this->mesin',"."'$this->kapasitas_penumpang',"."'$this->tipe',";
    return $mobil;
  }
}
