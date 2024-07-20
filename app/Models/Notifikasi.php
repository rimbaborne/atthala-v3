<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_id',
        'slug',
        'nama',
        'pesan_whatsapp'
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}
