<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDML extends Model
{
    use HasFactory;

    protected $table = 'log_dml';

    protected $fillable = [
        'user_id',
        'from',
        'to',
    ];
}
