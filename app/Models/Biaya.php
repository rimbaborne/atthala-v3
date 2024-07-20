<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;

    protected $fillable = [
        'periode_id',
        'nama',
        'keterangan',
        'nominal'
    ];

    public function periode()
    {
        return $this->belongsTo(Periode::class);
    }
}
