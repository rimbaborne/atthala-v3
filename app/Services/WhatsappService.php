<?php

namespace App\Services;
use App\Contracts\NotificationService;

class WhatsappService implements NotificationService
{

    public function kirimNotifWa($pesan){
        return $pesan;
    }
}
