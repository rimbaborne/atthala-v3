<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;


class JadwalController extends Controller
{
    private function getJadwalTable($unit)
    {
        return match ($unit) {
            'tahsin' => new \App\Tables\Admin\JadwalTahsin(),
            default => new \App\Tables\Admin\JadwalTahsin(),
        };
    }

    public function index($unit)
    {
        $jadwal = $this->getJadwalTable($unit);
        return view('dashboard.admin.jadwal.index', compact('unit', 'jadwal'));
    }
    // public function index($unit)
    // {
    //     $jadwal = Jadwal::all();
    //     $periode = Periode::all();
    //     $pengajar = Pengajar::all();
    //     $level = Level::all();
    //     return view('dashboard.admin.jadwal.index', compact('unit', 'jadwal', 'periode', 'pengajar', 'level'));
    // }

    public function create($unit)
    {
        $table = $this->getJadwalTable($unit);
        $pengajars = \App\Models\User::select('id', 'name')->whereHas('pengajar.unit', function ($query) use ($unit) {
                $query->where('slug', $unit);
            })->get();
        $periodes = \App\Models\Periode::select('id', 'nama')->whereHas('unit', function ($query) use ($unit) {
                $query->where('slug', $unit);
            })->get();
        $hari = [
                ['id' => 1, 'nama' => 'SENIN'],
                ['id' => 2, 'nama' => 'SELASA'],
                ['id' => 3, 'nama' => 'RABU'],
                ['id' => 4, 'nama' => 'KAMIS'],
                ['id' => 5, 'nama' => 'JUMAT'],
                ['id' => 6, 'nama' => 'SABTU'],
                ['id' => 7, 'nama' => 'AHAD']
            ];
        $status_belajar = [
            ['id' => 1, 'nama' => 'ONLINE'],
            ['id' => 2, 'nama' => 'OFFLINE'],
            ['id' => 3, 'nama' => 'ONLINE / OFFLINE']
        ];
        $jenis = [
            ['id' => 1, 'nama' => 'IKHWAN'],
            ['id' => 2, 'nama' => 'AKHWAT'],
        ];
        $level = \App\Models\Modules\Level::select('id', 'nama')->whereHas('unit', function ($query) use ($unit) {
            $query->where('slug', $unit);
        })->get();

        return view('dashboard.admin.jadwal.create', compact('unit', 'table', 'pengajars', 'periodes', 'hari', 'level', 'status_belajar', 'jenis'));
    }

    public function store(Request $request, $unit)
    {
        $request->validate([
            'periode' => 'required',
            // 'pengajar' => 'exists:pengajars,id',
            'level' => 'exists:levels,id',
            'jam_mulai' => 'date_format:H:i',
        ]);

        // try {
            $jadwal = new \App\Models\Jadwal();
            $jadwal->periode_id       = $request->periode;
            $jadwal->pengajar_id      = $request->pengajar;
            $jadwal->nama_jadwal      = $request->nama_jadwal;
            $jadwal->hari_belajar     = $request->hari_belajar;
            $jadwal->jam_mulai        = $request->jam_mulai;
            $jadwal->jam_selesai      = $request->jam_selesai;
            $jadwal->level_id         = $request->level;
            $jadwal->status_belajar   = $request->status_belajar;

            $jadwal->save();
            Toast::message('Data berhasil di tambahkan')->autoDismiss(5);
        // } catch (\Exception $e) {
        //     Toast::warning('Terjadi kesalahan, data gagal disimpan')->autoDismiss(5);
        // }
        return redirect()->route('admin.jadwal.index', ['unit' => $unit])->with('success', 'Data jadwal berhasil disimpan');
    }

    public function show($unit, $jadwal)
    {
        $jadwal = \App\Models\Jadwal::with('periode.unit')->findOrFail($jadwal);
        $pesertas = \ProtoneMedia\Splade\SpladeTable::
                                for(\App\Models\Kelas::where('jadwal_id', $jadwal->id)->get())
                                ->column('peserta.nama')
                                ;
        return view('dashboard.admin.jadwal.show', compact('unit', 'jadwal', 'pesertas'));
    }

    public function edit($unit, $jadwal)
    {
        $table = $this->getJadwalTable($unit);
        $jadwal = \App\Models\Jadwal::with('periode.unit')->findOrFail($jadwal);
        $pengajars = \App\Models\User::select('id', 'name')->whereHas('pengajar.unit', function ($query) use ($unit) {
                $query->where('slug', $unit);
            })->get();
        $periodes = \App\Models\Periode::select('id', 'nama')->whereHas('unit', function ($query) use ($unit) {
                $query->where('slug', $unit);
            })->get();
        $hari = [
                ['id' => 1, 'nama' => 'SENIN'],
                ['id' => 2, 'nama' => 'SELASA'],
                ['id' => 3, 'nama' => 'RABU'],
                ['id' => 4, 'nama' => 'KAMIS'],
                ['id' => 5, 'nama' => 'JUMAT'],
                ['id' => 6, 'nama' => 'SABTU'],
                ['id' => 7, 'nama' => 'AHAD']
            ];
        $status_belajar = [
                ['id' => 1, 'nama' => 'ONLINE'],
                ['id' => 2, 'nama' => 'OFFLINE'],
                ['id' => 3, 'nama' => 'ONLINE / OFFLINE']
            ];

        $jenis = [
                ['id' => 1, 'nama' => 'IKHWAN'],
                ['id' => 2, 'nama' => 'AKHWAT'],
            ];
        $level = \App\Models\Modules\Level::select('id', 'nama')->whereHas('unit', function ($query) use ($unit) {
                $query->where('slug', $unit);
            })->get();
        return view('dashboard.admin.jadwal.edit', compact('unit', 'table', 'jadwal', 'pengajars', 'periodes', 'hari', 'status_belajar', 'level', 'jenis'));
    }

    public function update(Request $request, $unit, $jadwal)
    {
        $request->validate([
            'periode' => 'required',
            // 'pengajar' => 'exists:pengajars,id',
            'level' => 'exists:levels,id',
            'jam_mulai' => 'date_format:H:i',
        ]);

        try {
            $jadwal = \App\Models\Jadwal::findOrFail($jadwal);
            $jadwal->periode_id       = $request->periode;
            $jadwal->pengajar_id      = $request->pengajar;
            $jadwal->nama_jadwal      = $request->nama_jadwal;
            $jadwal->hari_belajar     = $request->hari_belajar;
            $jadwal->jam_mulai        = $request->jam_mulai;
            $jadwal->jam_selesai      = $request->jam_selesai;
            $jadwal->level_id         = $request->level;
            $jadwal->status_belajar   = $request->status_belajar;
            $jadwal->jenis_peserta    = $request->jenis_peserta;
            $jadwal->save();
            Toast::message('Data berhasil di update')->autoDismiss(5);
        } catch (\Exception $e) {
            Toast::warning('Terjadi kesalahan, data gagal disimpan')->autoDismiss(5);
        }
        return redirect()->back()->with('success', 'Data jadwal berhasil diupdate');
    }

    public function destroy($unit, $jadwal)
    {
        try {
            $jadwal = \App\Models\Jadwal::findOrFail($jadwal);
            $jadwal->delete();
            Toast::message('Data berhasil di hapus')->autoDismiss(5);
        } catch (\Exception $e) {
            Toast::warning('Terjadi kesalahan, data gagal dihapus')->autoDismiss(5);
        }
        return redirect()->route('admin.jadwal.index', ['unit' => $unit])->with('success', 'Data jadwal berhasil dihapus');
    }
}

