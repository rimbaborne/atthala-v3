<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotPeriodePengajar extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_id',
        'user_pengajar',
        'slug',
        'jadwa_belajar',
        'nama',
        'status_aktif'
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }

    public function pengajar()
    {
        return $this->belongsTo(User::class, 'user_pengajar');
    }
}
