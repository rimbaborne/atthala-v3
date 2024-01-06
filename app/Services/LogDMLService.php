<?php

namespace App\Services;
use App\Contracts\LogService;
use App\Models\LogDML;
use Illuminate\Support\Facades\Auth;

class LogDMLService implements LogService
{

    public function create($data_from, $data_to){
        return LogDML::create([
            'user_id' => Auth::user()->id,
            'status'  => 'CREATED',
            'from'    => json_encode($data_from),
            'to'      => json_encode($data_to),
        ]);
    }

    public function update($data_from, $data_to){
        return LogDML::create([
            'user_id' => Auth::user()->id,
            'status'  => 'UPDATED',
            'from'    => json_encode($data_from),
            'to'      => json_encode($data_to),
        ]);
    }

    public function delete($data_from, $data_to){
        return LogDML::create([
            'user_id' => Auth::user()->id,
            'status'  => 'DELETED',
            'from'    => json_encode($data_from),
            'to'      => json_encode($data_to),
        ]);
    }
}
