<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kode_pengajar',
        'slug',
        'tanggal_masuk',
        'kode_nama_pengajar',
        'status_aktif'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function periodes()
    {
        return $this->belongsToMany(Periode::class, 'pivot_periode_pengajar');
    }
}
