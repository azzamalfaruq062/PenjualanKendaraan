<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class);
    }
}
