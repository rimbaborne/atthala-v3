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
            // $table->tinyInteger('status_aktif')->default(1);
            // $table->string('status_penerimaan')->nullable(); // 1 umum, 2 beasiswa laziz, 3 karyawan, 4 anak karyawan
            $table->string('status_penerimaan')->default('umum'); // UMUM - BEASISWA - KARYAWAN - ANAK KARYAWAN
            $table->string('status_aktif')->default('pending'); // Aktif - Pending - Lulus - Off - Cuti
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

    // update data status
    // ALTER TABLE `pesertas` CHANGE `status_aktif` `status_aktif` VARCHAR(255) NULL DEFAULT 'pending';
    // ALTER TABLE `pesertas` CHANGE `status_penerimaan` `status_penerimaan` VARCHAR(255) NULL DEFAULT 'umum';
    // UPDATE pesertas SET status_penerimaan = 'umum';
    // UPDATE pesertas SET status_aktif = 'pending';

    // ALTER TABLE kelas CHANGE `status_aktif` `status_aktif` VARCHAR(255) NULL DEFAULT 'pending';
    // ALTER TABLE kelas CHANGE `status_penerimaan` `status_penerimaan` VARCHAR(255) NULL DEFAULT 'umum';
    // UPDATE kelas SET status_penerimaan = 'umum';
    // UPDATE kelas SET status_aktif = 'pending';
};
