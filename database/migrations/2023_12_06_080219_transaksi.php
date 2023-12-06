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
        Schema::create('sewa', function (Blueprint $table) {
            $table->id();
            $table->string('no_invoice');
            $table->string('nama_customer');
            $table->string('nohp');
            $table->string('alamat');
            $table->string('nama_mobil');
            $table->string('nama_supir');
            $table->datetime('tanggal_pinjam');
            $table->datetime('tanggal kembali');
            $table->string('jaminan');
            $table->string('total_biaya');
            $table->string('verifikasi');
            $table->longText('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
