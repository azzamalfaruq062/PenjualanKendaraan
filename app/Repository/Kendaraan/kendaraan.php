<?php

namespace App\Repository\Kendaraan;

class Kendaraan
{
  public $name;
  public $tahun_keluaran;
  public $warna;
  public $harga;
  public function __construct($name = 'name', $tahun_keluaran = 'tahun_keluaran', $warna = 'warna', $harga = 'harga')
  {
    $this->name = $name;
    $this->tahun_keluaran = $tahun_keluaran;
    $this->warna = $warna;
    $this->harga = $harga;
  }

  public function kendaraan()
  {
    $kendaraan = "'$this->name'," . "'$this->tahun_keluaran',"."'$this->warna',"."'$this->harga',";
    return $kendaraan;
  }
}
