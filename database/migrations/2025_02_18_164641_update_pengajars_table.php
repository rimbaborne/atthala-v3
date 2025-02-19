<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('pengajars', function (Blueprint $table) {
            // Tambah foreign key baru
            if (!Schema::hasColumn('pengajars', 'periode_id')) {
                $table->foreignId('periode_id')->nullable()->constrained('periodes')->onDelete('set null');
            }
            if (!Schema::hasColumn('pengajars', 'unit_id')) {
                $table->foreignId('unit_id')->nullable()->constrained('units')->onDelete('set null');
            }

            // Ubah kolom agar nullable
            $table->string('kode_pengajar')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->date('tanggal_masuk')->nullable()->change();
            $table->string('kode_nama_pengajar')->nullable()->change();

            // Tambah kolom baru
            if (!Schema::hasColumn('pengajars', 'nip_pengajar')) {
                $table->string('nip_pengajar')->nullable();
            }
            if (!Schema::hasColumn('pengajars', 'data')) {
                $table->json('data')->nullable();
            }
            if (!Schema::hasColumn('pengajars', 'foto')) {
                $table->string('foto')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('pengajars', function (Blueprint $table) {
            if (Schema::hasColumn('pengajars', 'periode_id')) {
                $table->dropForeign(['periode_id']);
                $table->dropColumn('periode_id');
            }
            if (Schema::hasColumn('pengajars', 'unit_id')) {
                $table->dropForeign(['unit_id']);
                $table->dropColumn('unit_id');
            }
            if (Schema::hasColumn('pengajars', 'nip_pengajar')) {
                $table->dropColumn('nip_pengajar');
            }
            if (Schema::hasColumn('pengajars', 'data')) {
                $table->dropColumn('data');
            }
            if (Schema::hasColumn('pengajars', 'foto')) {
                $table->dropColumn('foto');
            }
        });
    }
};
