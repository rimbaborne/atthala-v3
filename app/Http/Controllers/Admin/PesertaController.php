<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tables\Pesertas;
use App\Models\Modules\Unit;

class PesertaController extends Controller
{
    // public function index($unit)
    // {
    //     $data_unit = Unit::where('slug',$unit)->first();
    //     if (!$data_unit) { abort(404); }
    //     $unit_id['id'] = $data_unit->id;
    //     $peserta = new Pesertas($unit_id);
    //     return view('modules.peserta.index', compact('unit', 'peserta'));
    // }

    public function index($unit, $periode)
    {
        // $jadwal = $this->getJadwalTable($unit);
        $dataperiode = \App\Models\Periode::find( $periode);

        return view('dashboard.admin.periode.peserta.index', compact('unit',  'periode', 'dataperiode'));
    }

    public function kehadiran($unit, $periode)
    {
        // $jadwal = $this->getJadwalTable($unit);
        $dataperiode = \App\Models\Periode::find( $periode);

        return view('dashboard.admin.periode.peserta.kehadiran', compact('unit',  'periode', 'dataperiode'));
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
