<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tables\PembayaranTahsin;

use App\Traits\TableTrait;
use App\Traits\FilterTable1Trait;
use App\Models\Kelas;


class PembayaranController extends Controller
{
    // use TableTrait;
    use FilterTable1Trait;
    public function index(Request $request, $unit)
    {
        // $columns = [
        //     ['key' => 'id', 'label' => 'ID', 'filter' => true],
        //     ['key' => 'peserta.nama', 'label' => 'Peserta Name', 'filter' => true],
        //     ['key' => 'periode.nama', 'label' => 'Periode Name', 'filter' => true],
        //     // ['key' => 'unit.nama', 'label' => 'Unit Name', 'filter' => true],
        //     // ['key' => 'jadwal.nama', 'label' => 'Jadwal Name', 'filter' => true],
        //     // ['key' => 'pengajar.nama', 'label' => 'Pengajar Name', 'filter' => true],
        //     // ['key' => 'json.data_pembayaran.pendaftaran', 'label' => 'Payment Registration Status', 'filter' => true],
        //     // ['key' => 'json.data_absen.1', 'label' => 'Attendance Status', 'filter' => true],
        //     // ['key' => 'json.data_nilai.ujian', 'label' => 'Exam Status', 'filter' => true],
        //     ['key' => 'created_at', 'label' => 'Created At', 'filter' => true, 'filter_type' => 'date_range'],
        // ];

        // $filters = [];
        // foreach ($columns as $column) {
        //     if (isset($column['filter']) && $column['filter']) {
        //         $key = $column['key'];
        //         if (isset($column['filter_type']) && $column['filter_type'] === 'date_range') {
        //             $filters[$key] = [
        //                 'start' => $request->get('filter.' . $key . '.start', ''),
        //                 'end' => $request->get('filter.' . $key . '.end', ''),
        //             ];
        //         } else {
        //             $filters[$key] = $request->get('filter.' . $key, '');
        //         }
        //     }
        // }

        // $relations = [
        //     'peserta',
        //     'periode',
        //     'periode.unit',
        //     'jadwal',
        //     'jadwal.pengajar'
        // ];

        // $model = new Kelas;
        // $kelas = $this->getFilteredData($model, $filters, $columns, $relations);

        // $rows = $this->prepareRows($kelas, $columns);

        // $baseDetailUrl = '#';

        // return view('modules.pembayaran.index', [
        //     'columns' => $columns,
        //     'rows' => $rows,
        //     'baseDetailUrl' => $baseDetailUrl
        // ]);

        // $pembayaran = PembayaranTahsin::class;
        // return view('modules.pembayaran.index', compact('unit', 'pembayaran'));

        $tableConfig = [
            'columns' => [
                'peserta_id' => [
                    'label' => 'ID Peserta',
                    'type' => 'text',
                ],
                'nama_peserta' => [
                    'label' => 'Nama Peserta',
                    'type' => 'relation',
                    'relation' => 'peserta.nama',
                ],
                'jenis_peserta' => [
                    'label' => 'Jenis Kelamin',
                    'type' => 'dropdown',
                    'relation' => 'peserta.jenis_peserta',
                    'options' => [
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ],
                ],
                'data_pembayaran' => [
                    'label' => 'Pendaftaran',
                    'type' => 'json',
                    'json_key' => 'pendaftaran',
                ],
                'data_nilai' => [
                    'label' => 'Ujian',
                    'type' => 'json',
                    'json_key' => 'ujian',
                ],
                'data_absensi' => [
                    'label' => 'Absensi',
                    'type' => 'json',
                    'json_key' => '1',
                ],
                'nama_unit' => [
                    'label' => 'Nama Unit',
                    'type' => 'relation',
                    'relation' => 'periode.unit.nama',
                ],
                'pengajar_nama' => [
                    'label' => 'Nama Pengajar',
                    'type' => 'relation',
                    'relation' => 'jadwal.pengajar.nama',
                ],
                'created_at' => [
                    'label' => 'Tanggal',
                    'type' => 'range',
                ],
            ]
        ];

        $query = Kelas::with(['peserta', 'periode.unit', 'jadwal.pengajar']);

        // Terapkan filter dinamis menggunakan trait
        $query = $this->applyFilters($query, $request, $tableConfig['columns']);

        $kelas = $query->paginate(10);

        return view('modules.pembayaran.data', compact('kelas', 'tableConfig', 'unit'));
    }

    public function export(Request $request)
    {
        $columns = [
            ['key' => 'id', 'label' => 'ID', 'filter' => true],
            ['key' => 'peserta.nama', 'label' => 'Peserta Name', 'filter' => true],
            ['key' => 'periode.nama', 'label' => 'Periode Name', 'filter' => true],
            // ['key' => 'unit.nama', 'label' => 'Unit Name', 'filter' => true],
            // ['key' => 'jadwal.nama', 'label' => 'Jadwal Name', 'filter' => true],
            // ['key' => 'pengajar.nama', 'label' => 'Pengajar Name', 'filter' => true],
            ['key' => 'json.data_pembayaran.pendaftaran', 'label' => 'Payment Registration Status', 'filter' => true],
            ['key' => 'json.data_absen.1', 'label' => 'Attendance Status', 'filter' => true],
            ['key' => 'json.data_nilai.ujian', 'label' => 'Exam Status', 'filter' => true],
            ['key' => 'created_at', 'label' => 'Created At', 'filter' => true, 'filter_type' => 'date_range'],
        ];

        $filters = [];
        foreach ($columns as $column) {
            if (isset($column['filter']) && $column['filter']) {
                $key = $column['key'];
                if (isset($column['filter_type']) && $column['filter_type'] === 'date_range') {
                    $filters[$key] = [
                        'start' => $request->get('filter.' . $key . '.start', ''),
                        'end' => $request->get('filter.' . $key . '.end', ''),
                    ];
                } else {
                    $filters[$key] = $request->get('filter.' . $key, '');
                }
            }
        }

        // return $this->exportToExcel($filters, KelasExport::class, 'kelas.xlsx');
    }

    public function store(Request $request, $unit)
    {
        // Logika untuk menyimpan data baru
    }

    public function show($unit, $id)
    {
        // Logika untuk menampilkan data berdasarkan ID
    }

    public function update(Request $request, $unit, $id)
    {
        // Logika untuk memperbarui data berdasarkan ID
    }

    public function destroy($unit, $id)
    {
        // Logika untuk menghapus data berdasarkan ID
    }
}
