<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'nama',
        'slug',
        'waktu_start',
        'waktu_end',
        'tahun_ajaran',
        'angkatan',
        'form_biodata_daftar',
        'aktifkan_pendaftaran',
        'tanggal_tagihan'
    ];

    protected $casts = [
        'form_biodata_daftar' => 'array',
    ];

    public function biaya()
    {
        return $this->hasMany(Biaya::class);
    }

    public function pengajar()
    {
        return $this->belongsToMany(Pengajar::class, 'pivot_periode_pengajar');
    }
}
