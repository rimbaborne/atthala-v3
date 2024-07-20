<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
use App\Models\Peserta;

class PivotJadwalPeserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwal_id',
        'peserta_id',
    ];

    public function periode()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'peserta_id');
    }
}
