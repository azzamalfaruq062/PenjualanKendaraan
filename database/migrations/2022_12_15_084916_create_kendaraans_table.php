<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    public function up()
    {        
        Schema::connection('mongodb')
        ->create('kendaraans', function ($collection) 
        {
            $collection->id();
            $collection->string('name');
            $collection->string('tanggal_keluaran');
            $collection->string('warna');
            $collection->string('harga');
            $collection->string('mesin');
            $collection->integer('kapasitas_penumpang')->nullable();
            $collection->string('tipe')->nullable();
            $collection->string('tipe_suspensi')->nullable();
            $collection->string('tipe_transmisi')->nullable();
            $collection->timestamps();
        });
    }

    // public function up()
    // {
    //     Schema::create('kendaraans', function ($collection) {
    //         $collection->id();
    //         $collection->string('name');
    //         $collection->integer('tahun_keluaran');
    //         $collection->string('warna');
    //         $collection->string('harga');
    //     });
    // }

    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
