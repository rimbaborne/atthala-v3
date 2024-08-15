<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendaftaranTahsinRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'phone_number'  => 'required|digits_between:8,15',
            'name'          => 'required|string|max:255',
            'jenis_peserta' => 'required|in:ikhwan,akhwat',
            'tanggal'       => 'required|integer|between:1,31',
            'bulan'         => 'required|integer|between:1,12',
            'tahun'         => 'required|integer|between:1950,' . (date('Y') - 12),
            'kota_domisili' => 'required|string|max:255',
            'alamat'        => 'required|string|max:255',
            'pekerjaan'     => 'required|string|max:255',
            'pembelajaran'  => 'required',
            'pembayaran*'   => 'required|boolean'
        ];
    }
}
