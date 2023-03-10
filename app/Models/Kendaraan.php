<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;


class Kendaraan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function penjualans()
    {
        return $this->belongsTo(penjualan::class);
    }
}
