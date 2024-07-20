<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jadwal;
use App\Models\Pengajar;

class PivotJadwalPengajar extends Model
{
    use HasFactory;

    protected $fillable = [
        'jadwal_id',
        'pengajar_id',
    ];

    public function periode()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function Pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'Pengajar_id');
    }
}
