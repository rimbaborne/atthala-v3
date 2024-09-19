<?php

namespace App\Http\Controllers\Penguji;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Periode;
use App\Models\Pengajar;
use App\Models\Modules\Level;
use App\Tables\Penguji\DataPengujiJadwal;

class JadwalController extends Controller
{

    public function index($unit)
    {
        $jadwals = new DataPengujiJadwal($unit);

        return view('dashboard.penguji.jadwal.index', compact('jadwals', 'unit'));
    }

    public function create()
    {
        $periode = Periode::pluck('nama_periode', 'id');
        $pengajar = Pengajar::pluck('nama_pengajar', 'id');
        $level = Level::pluck('nama_level', 'id');

        return view('dashboard.penguji.jadwal.create', compact('periode', 'pengajar', 'level'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'periode_id' => 'required',
            'pengajar_id' => 'required',
            'slug' => 'required|unique:jadwals',
            'nip_pengajar' => 'required',
            'jadwal_belajar' => 'required',
            'nama_jadwal' => 'required',
            'level_id' => 'required',
            'batasan_peserta' => 'required|numeric',
            'jenis_peserta' => 'required',
        ]);

        Jadwal::create($request->all());

        return redirect()->route('dashboard.penguji.jadwal.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Jadwal $jadwal)
    {
        $periode = Periode::pluck('nama_periode', 'id');
        $pengajar = Pengajar::pluck('nama_pengajar', 'id');
        $level = Level::pluck('nama_level', 'id');

        return view('dashboard.penguji.jadwal.edit', compact('periode', 'pengajar', 'level', 'jadwal'));
    }

    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'periode_id' => 'required',
            'pengajar_id' => 'required',
            'slug' => 'required|unique:jadwals,slug,'.$jadwal->id,
            'nip_pengajar' => 'required',
            'jadwal_belajar' => 'required',
            'nama_jadwal' => 'required',
            'level_id' => 'required',
            'batasan_peserta' => 'required|numeric',
            'jenis_peserta' => 'required',
        ]);

        $jadwal->update($request->all());

        return redirect()->route('dashboard.penguji.jadwal.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('dashboard.penguji.jadwal.index')->with('success', 'Data berhasil dihapus');
    }
}
