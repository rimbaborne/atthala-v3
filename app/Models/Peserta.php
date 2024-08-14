<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'uuid',
        'jadwal_id',
        'nis_peserta',
        'slug',
        'notelp',
        'biodata',
        'foto',
        'status_penerimaan',
        'status_aktif',
        'tanggal_lahir',
        'gender'
    ];

    protected $casts = [
        'biodata' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class);
    }
}
