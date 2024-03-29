<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\LogDML;
use Illuminate\Support\Facades\Auth;

class LogDMLServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        function log_dml($status, $data_from, $data_to){
            return LogDML::create([
                'user_id' => Auth::user()->id,
                'status'  => $status,
                'from'    => json_encode($data_from),
                'to'      => json_encode($data_to),
            ]);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
