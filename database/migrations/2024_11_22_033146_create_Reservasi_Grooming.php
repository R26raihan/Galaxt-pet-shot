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
        Schema::create('reservasi_grooming', function (Blueprint $table) {
            $table->id(); // ID reservasi grooming
            $table->string('nama'); // Nama pelanggan
            $table->text('alamat'); // Alamat pelanggan
            $table->string('no_wa', 15); // Nomor WhatsApp pelanggan
            $table->string('jenis_hewan'); // Jenis hewan yang akan digrooming
            $table->string('nama_hewan'); // Nama hewan
            $table->string('jenis_layanan'); // Jenis layanan grooming (Mandi, Potong Rambut, dll)
            $table->date('tanggal_layanan'); // Tanggal layanan grooming
            $table->decimal('harga', 10, 2); // Harga layanan grooming
            $table->timestamps(); // Waktu created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi_grooming');
    }
};
