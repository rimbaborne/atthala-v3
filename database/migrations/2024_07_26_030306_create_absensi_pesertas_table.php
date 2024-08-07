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
        Schema::create('absensi_pesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('absen_id')->constrained('absens');
            $table->foreignId('peserta_id')->constrained('pesertas');
            $table->tinyInteger('absen')->default(1); // 1 HADIR, 2 TIDAK MASUK, 3 SAKIT, 4 IZIN
            $table->string('keterangan_absen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi_pesertas');
    }
};
