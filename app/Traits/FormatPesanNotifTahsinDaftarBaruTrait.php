<?php

namespace App\Traits;

trait FormatPesanNotifTahsinDaftarBaruTrait
{
    public function NotifTahsinDaftarBaruHasil($level, $uuid)
    {
        return "Assalamualaikum Warrohmarullah Wabarokatuh

Terima kasih Kepada Calon Peserta Tahsin Angkatan 25 LTTQ Ar Rahmah Balikpapan, tim penguji kami telah selesai memeriksa bacaan anda.

Alhamdulillah, Level belajar anda adalah di level *".$level."*.
Silakan klik link berikut untuk memilih kelas belajar yang tersedia. Link : https://arrahmahbalikpapan.or.id/lttq/tahsin/pendaftaran/pilih-jadwal/".$uuid."

Jazaakumullah Khoiron Katsiron,
Wassalamualaikum warahmatullahi wabarakatuh.

Salam,
Panitia Pendaftaran Baru Tahsin Angkatan 25
*Lembaga Tahsin Tahfizhil Qur'an (LTTQ) Ar Rahmah Balikpapan*";
    }
}
