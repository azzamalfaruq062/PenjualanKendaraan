<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tahun_keluaran');
            $table->string('warna');
            $table->string('harga');
            $table->string('mesin');
            $table->integer('kapasitas_penumpang')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tipe_suspensi')->nullable();
            $table->string('tipe_transmisi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraans');
    }
}
