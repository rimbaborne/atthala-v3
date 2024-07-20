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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('periode_id')->constrained('periodes');
            $table->foreignId('peserta_id')->constrained('pesertas');
            $table->foreignId('user_id')->constrained('users');
            $table->tinyInteger('status')->default(0); // 0 UNPAID - 1 PAID - 2 EXPIRED
            $table->integer('nominal_total');
            $table->foreignId('payment_gateway_id')->constrained('payment_gateways');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
