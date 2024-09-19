<?php

namespace App\Tables;

use App\Models\Peserta;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;
use App\Models\Kelas;
use App\Models\Modules\Unit;
use ProtoneMedia\Splade\Facades\Toast;
class Pesertas extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    protected $idunit;
    public function __construct($unit = null)
    {
        if($unit = 1){
            $this->idunit = 1;
        } elseif($unit = 2){
            $this->idunit = 2;
        } elseif($unit = 3){
            $this->idunit = 3;
        } elseif($unit = 4){
            $this->idunit = 4;
        }
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

        return Kelas::with('periode')->whereHas('periode', function($query){
            $query->where('unit_id', $this->idunit);
        });
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    // FIXME Relevansi Data Peserta
    // TODO Ganti Metode Tabel, kesalahan di manipulasi data kolom integer
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['peserta.nama', 'peserta.phone_number'])
            ->rowLink(fn (Kelas $kelas) => route('superadmin.users.show', $kelas))
            ->column(
                key: 'nis_peserta',
                label: 'NIS',
            )
            ->column(
                key: 'peserta.nama',
                label: 'Nama',
            )
            ->column(
                key: 'peserta.phone_number',
                label: 'No. Telp',
            )
            ->column(
                key: 'status_aktif',
                label: 'Status',
            )
            ->column(
                key: 'status_penerimaan',
                label: 'Penerimaan',
            )
            ->column(
                key: 'peserta.jenis_peserta',
                label: 'Peserta',
            )

            ->column(
                key: 'data_a',
                label: 'Level Daftar',
                as: function (Kelas $kelas) {
                        if ($kelas) {
                            $nilai_ = $kelas ? json_decode($kelas->data_nilai, true) : '';
                            if (isset($nilai_[0]['level_hasil_penguji'])) {
                                $nilai  = $nilai_[0]['level_hasil_penguji'];
                            } else {
                                $nilai  = '';
                            }
                            return $nilai;
                        }
                    }
            )
            ->column(
                key: 'data',
                label: 'Level',
                as: function (Kelas $kelas) {
                        if ($kelas->jadwal) {
                            return $kelas->jadwal->level;
                        }
                    }
            )
            ->column(
                key: 'jadwal.pengajar.user.name',
                label: 'Pengajar',
            )
            ->column(
                key: 'jadwal.jadwal_belajar',
                label: 'Waktu',
            )
            ->column(
                key: 'periode.angkatan',
                label: 'Angkatan',
            )
            ->column(
                key: 'data_b',
                label: 'Hasil Ujian',
                as: function (Kelas $kelas) {
                        if ($kelas) {
                            $nilai_ = $kelas ? json_decode($kelas->data_nilai, true) : '';
                            if (isset($nilai_[0]['level_hasil_ujian'])) {
                                $nilai  = $nilai_[0]['level_hasil_ujian'];
                            } else {
                                $nilai  = '';
                            }
                            return $nilai;
                        }
                    }
            )
            ->column(
                key: 'peserta.tanggal_lahir',
                label: 'TGL Lahir',
            )
            ->column(
                key: 'created_at',
                label: 'Daftar',
            )
            ->column(
                key: 'data_ktp',
                label: 'ktp',
                as: function (Kelas $kelas) {
                    if ($kelas) {
                        $nilai_ = $kelas ? json_decode($kelas->peserta->biodata, true) : '';
                        if (isset($nilai_[0]['ktp'])) {
                            $nilai  = $nilai_[0]['ktp'];
                        } else {
                            $nilai  = '';
                        }
                        return $nilai;
                    }
                }
            )
            ->column(
                key: 'data_rekaman',
                label: 'rekaman',
                as: function (Kelas $kelas) {
                    if ($kelas) {
                        $nilai_ = $kelas ? json_decode($kelas->peserta->biodata, true) : '';
                        if (isset($nilai_[0]['rekaman'])) {
                            $nilai  = $nilai_[0]['rekaman'];
                        } else {
                            $nilai  = '';
                        }
                        return $nilai;
                    }
                }
            )



            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction(
            //         label: 'Touch timestamp',
            //         each: fn (Kelas $kelas) => $kelas->touch(),
            //         confirm: true
            //     )
            ->export()
            ->paginate(10)
            ;
    }
}
