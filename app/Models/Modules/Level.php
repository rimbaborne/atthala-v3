<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modules\Unit;

class Level extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_id',
        'nama',
        'slug',
        'keterangan',
    ];

    public function unit()
    {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}
