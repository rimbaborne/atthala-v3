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

Silahkan masukkan 4 kode tersebut dan dapat digunakan selama 6 bulan kedepan.

Syukron
Tim IT
Yayasan Arrahmah Balikpapan";
    }
}
