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
        Schema::create('reservasi_penitipan', function (Blueprint $table) {
            $table->id(); // ID reservasi
            $table->string('nama'); // Nama pelanggan
            $table->text('alamat'); // Alamat pelanggan
            $table->string('no_wa', 15); // Nomor WhatsApp pelanggan
            $table->string('jenis_hewan'); // Jenis hewan yang dititipkan
            $table->string('nama_hewan'); // Nama hewan
            $table->integer('lama_hari'); // Lama penitipan dalam hari
            $table->string('paket'); // Paket penitipan (Harian, Mingguan, Bulanan)
            $table->timestamps(); // Waktu created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi_penitipan');
    }
};
