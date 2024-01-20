<?php

namespace App\Traits;

trait PhoneNumberTrait
{
    /**
     * Format nomor handphone agar sesuai format yang diinginkan.
     *
     * @param  string  $phoneNumber
     * @return string
     */
    public function formatPhoneNumber($phoneNumber, $countryCode)
    {
        // Hapus karakter selain angka dari nomor handphone
        $cleanedPhoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        // Cek apakah nomor handphone sudah memiliki kode negara
        if (substr($cleanedPhoneNumber, 0, strlen($countryCode)) !== $countryCode) {
            // Jika tidak, tambahkan kode negara
            $cleanedPhoneNumber = $countryCode . ltrim($cleanedPhoneNumber, '0');
        }

        return $cleanedPhoneNumber;
    }

}
