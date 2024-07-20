<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Tables\Units;

class Pengaturan extends Model
{
    use HasFactory;

    protected $fillable = [
        'unit_id',
        'nama',
        'nama_penyesuaian'
    ];

    public function unit()
    {
        return $this->belongsTo(Units::class);
    }
}
