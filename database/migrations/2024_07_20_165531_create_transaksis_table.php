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
            $table->uuid('uuid')->unique();
            $table->foreignId('pembayaran_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->tinyInteger('status')->default(0); // 0 UNPAID - 1 PAID - 2 EXPIRED
            $table->integer('nominal_total');
            $table->foreignId('payment_gateway_id')->constrained();
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
