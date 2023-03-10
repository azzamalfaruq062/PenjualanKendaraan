<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mongodb')
        ->create('penjualans', function (Blueprint $collection) 
        {
            $collection->id();
            $collection->string('pembeli');
            $collection->date('tanggal_beli');
            $collection->foreignId('kendaraans_id')->constrained('kendaraans');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
