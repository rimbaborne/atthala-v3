<?php

namespace App\Traits;

use App\Models\Modules\Unit;

trait CekUnitTrait
{
    protected function cekUnit($unit)
    {
        $data_unit = Unit::where('slug',$unit)->first();
        if (!$data_unit) { abort(404); }
        $unit_id['id'] = $data_unit->id;

        return $unit_id;
    }
}
