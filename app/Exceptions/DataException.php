<?php

namespace App\Exceptions;

use Exception;
use ProtoneMedia\Splade\Facades\Toast;


class DataException extends Exception
{

    public static function errorCreate()
    {
        return Toast::title('Terjadi Kesalahan')->warning('Data Tidak Berhasil Ditambahkan. Hubungi Admin');
    }

    public static function errorUpdate()
    {
        return Toast::title('Terjadi Kesalahan')->warning('Data Tidak Berhasil Diperbaruhi. Hubungi Admin');
    }

    public static function errorDelete()
    {
        return Toast::title('Terjadi Kesalahan')->warning('Data Tidak Berhasil Dihapus. Hubungi Admin');
    }

    public static function errorSendOTP()
    {
        return Toast::title('Terjadi Kesalahan')->warning('Kode OTP Tidak Berhasil Dikirim. Coba Lagi Nanti atau Hubungu wa.me/6282149604546');
    }
}
