<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranksaksibarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tranksaksibarus', function (Blueprint $table) {
            $table->id('id');
            $table->string('kd_invoice')->nullable();
            $table->string('id_nama',50)->nullable();
            $table->string('id_paket',50)->nullable();
            $table->dateTime('tgl')->nullable();
            $table->dateTime('batas_waktu')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('pembayaran')->nullable();
            $table->bigInteger('jumlah')->nullable();
            $table->string('kiloan')->nullable();
            $table->string('id_harga')->nullable();
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
        Schema::dropIfExists('tranksaksibarus');
    }
}
