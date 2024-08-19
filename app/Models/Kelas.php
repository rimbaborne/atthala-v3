<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'nis_peserta',
        'peserta_id',
        'jadwal_id',
        'periode_id',
        'data_pembayaran',
        'data_absensi',
        'status_aktif',
        'status_penerimaan',
        'data_pembayaran',
        'data_absensi',
        'data_nilai',
        'status_aktif',
    ];

    // protected $casts = [
    //     'data_pembayaran' => 'array',
    //     'data_absensi' => 'array',
    //     'status_aktif' => 'boolean',
    // ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id');
    }

    public function transaksi()
    {
        return $this->hasMany(Periode::class, 'peserta_id', 'id');
    }
}
