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
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('periode_id')->constrained('periodes');
            $table->foreignId('user_id')->constrained();
            $table->string('nis_peserta')->unique()->nullable();
            $table->string('slug')->unique()->nullable();
            $table->string('phone_number')->nullable();
            $table->json('biodata')->nullable();
            $table->json('data_pembayaran')->nullable();
            $table->string('foto')->nullable();
            $table->tinyInteger('status_penerimaan')->default(1); // 1 UMUM 2 BEASISWA 3 ANAK KARYAWAN
            $table->boolean('status_aktif')->default(1);
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_peserta', ['ikhwan', 'akhwat']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
