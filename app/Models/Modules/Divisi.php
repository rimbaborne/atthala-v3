<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Divisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id_ketua',
        'nama',
        'slug',
        'keterangan',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id_keterangan');
    }
}
