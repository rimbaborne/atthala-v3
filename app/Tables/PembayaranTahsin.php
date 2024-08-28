<?php

namespace App\Tables;

use App\Models\Kelas;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class PembayaranTahsin extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return Kelas::query();
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
        // ->withGlobalSearch(columns: ['peserta.nama', 'peserta.phone_number'])
        // ->rowLink(fn (Kelas $kelas = null) => route('superadmin.users.show', $kelas))
        // ->column(
        //     key: 'nis_peserta',
        //     label: 'NIS',
        // )
        // ->column(
        //     key: 'peserta.nama',
        //     label: 'Nama',
        // )
        // ->column(
            // key: 'peserta.phone_number',
        //     label: 'No. Telp',
        // )
        // ->column(
        //     label: 'Pendaftaran',
            // as: function (Kelas $kelas = null) {
            //     if($kelas){
            //         $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
            //         $value = $cek ? $cek[0]['pendaftaran'] : 0;
            //         return $value;
            //     } else {
            //         return 0;
            //     }
            // }
        // )
        // ->column(
        //     key: 'datapembayaran2',
        //     label: 'Daftar Ulang',
        //     as: function (Kelas $kelas = null) {
        //         if($kelas){
        //             $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
        //             $value = $cek ? $cek[0]['daftar_ulang'] : 0;
        //             return $value;
        //         } else {
        //             return 0;
        //         }
        //     }
        // )
        // ->column(
        //     key: 'datapembayaran3',
        //     label: 'SPP 1',
        //     as: function (Kelas $kelas = null) {
        //         if($kelas){
        //             $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
        //             $value = $cek ? $cek[0]['spp1'] : 0;
        //             return $value;
        //         } else {
        //             return 0;
        //         }
        //     }
        // )
        // ->column(
        //     key: 'datapembayaran4',
        //     label: 'SPP 2',
        //     as: function (Kelas $kelas = null) {
        //         if($kelas){
        //             $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
        //             $value = $cek ? $cek[0]['spp2'] : 0;
        //             return $value;
        //         } else {
        //             return 0;
        //         }
        //     }
        // )
        // ->column(
        //     key: 'datapembayaran5',
        //     label: 'SPP 3',
        //     as: function (Kelas $kelas = null) {
        //         if($kelas){
        //             $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
        //             $value = $cek ? $cek[0]['spp3'] : 0;
        //             return $value;
        //         } else {
        //             return 0;
        //         }
        //     }
        // )
        // ->column(
        //     key: 'datapembayaran6',
        //     label: 'SPP 4',
        //     as: function (Kelas $kelas = null) {
        //         if($kelas){
        //             $cek = $kelas ? json_decode($kelas->data_pembayaran, true) : 0;
        //             $value = $cek ? $cek[0]['spp4'] : 0;
        //             return $value;
        //         } else {
        //             return 0;
        //         }
        //     }
        // )




        // ->searchInput()
        // ->selectFilter()
        // ->withGlobalSearch()

        // ->bulkAction(
        //         label: 'Touch timestamp',
        //         each: fn (Kelas $kelas = null) => $kelas->touch(),
        //         confirm: true
        //     )
        ->export()
        ->paginate(10)
        ;
    }
}
