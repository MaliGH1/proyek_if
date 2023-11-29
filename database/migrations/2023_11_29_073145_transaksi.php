<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice')->unique();
            $table->string('nama_customer');
            $table->string('nopol');
            $table->string('tipe_mobil');
            $table->string('supir');
            $table->date('tanggal_pinjam');
            $table->date('tanggal kembali');
            $table->string('jaminan');
            $table->string('total_biaya');
            $table->string('verifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
