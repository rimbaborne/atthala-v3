<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modules\Level;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_id',
        'pengajar_id',
        'slug',
        'nip_pengajar',
        'jadwal_belajar',
        'nama_jadwal',
        'level_id',
        'batasan_peserta',
        'jenis_peserta',
        'banyak_peserta',
        'keterangan'
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
