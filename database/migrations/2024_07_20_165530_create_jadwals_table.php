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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->constrained('periodes');
            $table->foreignId('pengajar_id')->constrained('pengajars');
            $table->string('slug')->unique();
            $table->string('nip_pengajar');
            $table->string('jadwal_belajar');
            $table->string('nama_jadwal');
            $table->foreignId('level_id')->constrained();
            $table->integer('batasan_peserta');
            $table->integer('banyak_peserta')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
