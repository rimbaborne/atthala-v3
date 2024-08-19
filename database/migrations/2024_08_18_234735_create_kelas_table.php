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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('peserta_id')->constrained('pesertas');
            $table->foreignId('periode_id')->nullable()->constrained('periodes');
            $table->foreignId('jadwal_id')->nullable()->constrained('jadwals');
            $table->string('nis_peserta')->unique()->nullable();
            $table->json('data_pembayaran')->nullable();
            $table->json('data_absensi')->nullable();
            $table->json('data_nilai')->nullable();
            $table->tinyInteger('status_aktif')->default(1); // 1 umum, 2 beasiswa laziz, 3 karyawan, 4 anak karyawan
            $table->string('status_penerimaan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
