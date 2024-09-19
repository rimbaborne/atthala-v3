<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Periode;
use App\Models\Pengajar;
use App\Models\Modules\Level;

class JadwalController extends Controller
{
    public function index($unit)
    {
        $jadwal = Jadwal::all();
        $periode = Periode::all();
        $pengajar = Pengajar::all();
        $level = Level::all();
        return view('dashboard.admin.jadwal.index', compact('unit', 'jadwal', 'periode', 'pengajar', 'level'));
    }

    public function store(Request $request, $unit)
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

        return redirect()->route('admin.jadwal.index', $unit)->with('success', 'Data berhasil ditambahkan');
    }

    public function show($unit, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('dashboard.admin.jadwal.show', compact('unit', 'jadwal'));
    }

    public function update(Request $request, $unit, $id)
    {
        $request->validate([
            'periode_id' => 'required',
            'pengajar_id' => 'required',
            'slug' => 'required|unique:jadwals,slug,'.$id,
            'nip_pengajar' => 'required',
            'jadwal_belajar' => 'required',
            'nama_jadwal' => 'required',
            'level_id' => 'required',
            'batasan_peserta' => 'required|numeric',
            'jenis_peserta' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('admin.jadwal.index', $unit)->with('success', 'Data berhasil diupdate');
    }

    public function destroy($unit, $id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('admin.jadwal.index', $unit)->with('success', 'Data berhasil dihapus');
    }
}

