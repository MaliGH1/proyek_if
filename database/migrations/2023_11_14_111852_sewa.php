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
            $table->id('nota');
            $table->unsignedBigInteger('nopol');
            $table->unsignedBigInteger('id_pelanggan');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->boolean('sopir')->default(false);
            $table->enum('status_bayar', ['lunas', 'belum lunas'])->default('belum lunas');
            $table->decimal('pembayaran', 10, 2)->nullable();

            $table->unsignedBigInteger('noktp')->nullable();
            $table->timestamps();

            $table->foreign('nopol')->references('nopol')->on('mobil')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('noktp')->references('noktp')->on('supir')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewa');
    }
};
