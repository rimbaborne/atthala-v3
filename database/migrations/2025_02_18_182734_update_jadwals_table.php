<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('jadwals', function (Blueprint $table) {
            // Ubah foreign key menjadi nullable jika sudah ada
            if (Schema::hasColumn('jadwals', 'periode_id')) {
                $table->foreignId('periode_id')->nullable()->change();
            }
            if (Schema::hasColumn('jadwals', 'level_id')) {
                $table->foreignId('level_id')->nullable()->change();
            }

            // Tambah kolom baru hanya jika belum ada
            if (!Schema::hasColumn('jadwals', 'pengajar_id')) {
                $table->foreignId('pengajar_id')->nullable()->constrained('pengajars')->onDelete('set null');
            }
            if (!Schema::hasColumn('jadwals', 'status_belajar')) {
                $table->string('status_belajar')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'status_waktu')) {
                $table->string('status_waktu')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'hari_belajar')) {
                $table->string('hari_belajar')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'jam_mulai')) {
                $table->string('jam_mulai')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'jam_selesai')) {
                $table->string('jam_selesai')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'batas_mulai')) {
                $table->timestamp('batas_mulai')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'batas_akhir')) {
                $table->timestamp('batas_akhir')->nullable();
            }
            if (!Schema::hasColumn('jadwals', 'data')) {
                $table->json('data')->nullable();
            }

            // Ubah tipe data kolom yang sudah ada
            if (Schema::hasColumn('jadwals', 'slug')) {
                $table->string('slug')->nullable()->change();
            }
            if (Schema::hasColumn('jadwals', 'jadwal_belajar')) {
                $table->string('jadwal_belajar')->nullable()->change();
            }
            if (Schema::hasColumn('jadwals', 'nama_jadwal')) {
                $table->string('nama_jadwal')->nullable()->change();
            }
            if (Schema::hasColumn('jadwals', 'batasan_peserta')) {
                $table->integer('batasan_peserta')->nullable()->change();
            }
            if (Schema::hasColumn('jadwals', 'nip_pengajar')) {
                $table->string('nip_pengajar')->nullable()->change();
            }
        });
    }

    public function down()
    {
        Schema::table('jadwals', function (Blueprint $table) {
            // Hapus kolom yang ditambahkan jika ada rollback
            if (Schema::hasColumn('jadwals', 'pengajar_id')) {
                $table->dropForeign(['pengajar_id']);
                $table->dropColumn('pengajar_id');
            }
            if (Schema::hasColumn('jadwals', 'status_belajar')) {
                $table->dropColumn('status_belajar');
            }
            if (Schema::hasColumn('jadwals', 'status_waktu')) {
                $table->dropColumn('status_waktu');
            }
            if (Schema::hasColumn('jadwals', 'hari_belajar')) {
                $table->dropColumn('hari_belajar');
            }
            if (Schema::hasColumn('jadwals', 'jam_mulai')) {
                $table->dropColumn('jam_mulai');
            }
            if (Schema::hasColumn('jadwals', 'jam_selesai')) {
                $table->dropColumn('jam_selesai');
            }
            if (Schema::hasColumn('jadwals', 'batas_mulai')) {
                $table->dropColumn('batas_mulai');
            }
            if (Schema::hasColumn('jadwals', 'batas_akhir')) {
                $table->dropColumn('batas_akhir');
            }
            if (Schema::hasColumn('jadwals', 'data')) {
                $table->dropColumn('data');
            }
        });
    }
};
