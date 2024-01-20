<?php

namespace App\Contracts;

interface NotificationService {
    public function kirimNotifWa($nomor, $isipesan);
}
