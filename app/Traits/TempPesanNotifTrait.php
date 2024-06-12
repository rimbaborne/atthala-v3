<?php

namespace App\Traits;

trait TempPesanNotifTrait
{
    public function formatPesanAksesWa($kode)
    {
        return "Assalamualaikum Warrohmatullah Wabarokatuh.
Anda baru saja meminta Kode Akses melalui Sistem Yayasan Arrahmah Balikpapan

Berikut Kode OTP :
*".$kode."*

Syukron
Tim IT
Yayasan Arrahmah Balikpapan";
    }
}
