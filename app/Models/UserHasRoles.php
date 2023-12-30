<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserHasRoles extends Model
{
    use HasFactory;

    protected $table ="model_has_roles";
    protected $fillable = [
        'role_id',
        'model_id',
    ];

    function role() {
        return $this->belongsTo(RolesUsers::class, 'role_id', 'id');
    }

}
