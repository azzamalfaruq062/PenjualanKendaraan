<?php

namespace App\Repository\Kendaraan;


use App\Repository\Kendaraan\Kendaraan;


// Motor is Overriding inherited method from Kendaraan
class Motor extends Kendaraan
{
  public $mesin;
  public $tipe_suspensi;
  public $tipe_transmisi;
  public function __construct($name = 'name', $tahun_keluaran = 'tahun_keluaran', $warna = 'warna', $harga = 'harga', $mesin = 'mesin', $tipe_suspensi = 'tipe_suspensi', $tipe_transmisi = 'tipe_transmisi')
  {
    $this->name = $name;
    $this->tahun_keluaran = $tahun_keluaran;
    $this->warna = $warna;
    $this->harga = $harga;
    $this->mesin = $mesin;
    $this->tipe_suspensi = $tipe_suspensi;
    $this->tipe_transmisi = $tipe_transmisi;
  }

  public function motor()
  {
    $motor = "'$this->name'," . "'$this->tahun_keluaran',"."'$this->warna',"."'$this->harga',"."'$this->mesin',"."'$this->tipe_suspensi',"."'$this->tipe_transmisi',";
    return $motor;
  }
}
