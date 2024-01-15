<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'divisi_id',
        'nama',
        'slug',
        'keterangan',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id_keterangan');
    }
}
