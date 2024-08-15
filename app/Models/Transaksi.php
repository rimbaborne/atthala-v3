<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'periode_id',
        'peserta_id',
        'pembayaran_id',
        'user_id',
        'status',
        'nominal_total',
        'payment_gateway_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }
}
