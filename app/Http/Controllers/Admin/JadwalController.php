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

    public function index($unit, $periode)
    {
        // $jadwal = $this->getJadwalTable($unit);
        $jadwal = \ProtoneMedia\Splade\SpladeTable::for(\App\Models\Jadwal::where('periode_id', $periode)->orderBy('created_at', 'desc'))
                        ->withGlobalSearch(columns: ['nama_jadwal', 'pengajar.user.name', 'periode.angkatan', 'hari_belajar'])
                        ->column(label: 'Actions')
                        ->column(
                            key:'periode.nama',
                            label:'Periode',
                        )
                        ->column(
                            key:'pengajar.user.name',
                            label:'Pengajar',
                            sortable: true
                        )
                        ->column('jenis_peserta')
                        ->column('batasan_peserta')
                        ->column('nama_jadwal')
                        ->column(
                            key:'level.nama',
                            label:'Level',
                            sortable: true
                        )
                        ->column('hari_belajar', sortable: true)
                        ->column('jam_mulai')
                        ->column('status_belajar', sortable: true)
                        ->paginate(15)
                    ;
        $dataperiode = \App\Models\Periode::find( $periode);

        return view('dashboard.admin.periode.jadwal.index', compact('unit', 'jadwal', 'periode', 'dataperiode'));
    }

    public function absen($unit, $periode)
    {
        $jadwal = $this->getJadwalTable($unit);
        $dataperiode = \App\Models\Periode::find( $periode);

        return view('dashboard.admin.periode.jadwal.absen', compact('unit', 'jadwal', 'periode', 'dataperiode'));
    }
    // public function index($unit)
    // {
    //     $jadwal = Jadwal::all();
    //     $periode = Periode::all();
    //     $pengajar = Pengajar::all();
    //     $level = Level::all();
    //     return view('dashboard.admin.periode.jadwal.index', compact('unit', 'jadwal', 'periode', 'pengajar', 'level'));
    // }

    public function create($unit, $periode)
    {
        $table = $this->getJadwalTable($unit);
        $pengajars = \App\Models\User::selectRaw("id, concat(name, ' (', phone_number, ')') as name")
            ->whereHas('pengajar.unit', function ($query) use ($unit) {
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
        $kelas_jadwal = [
            ['id' => 1, 'nama' => 'REGULER'],
            ['id' => 2, 'nama' => 'ESKLUSIF'],
            ['id' => 3, 'nama' => 'LOKASI'],
        ];
        $level = \App\Models\Modules\Level::select('id', 'nama')->whereHas('unit', function ($query) use ($unit) {
            $query->where('slug', $unit);
        })->get();

        return view('dashboard.admin.periode.jadwal.create', compact('unit', 'table', 'pengajars', 'periodes', 'hari', 'level', 'status_belajar', 'jenis', 'kelas_jadwal', 'periode'));
    }

    public function store(Request $request, $unit, $periode)
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
            $jadwal->jenis_peserta    = $request->jenis_peserta;

            $jadwal->save();
            Toast::message('Data berhasil di tambahkan')->autoDismiss(5);
        // } catch (\Exception $e) {
        //     Toast::warning('Terjadi kesalahan, data gagal disimpan')->autoDismiss(5);
        // }
        return redirect()->route('admin.periode.jadwal.index', ['unit' => $unit, 'periode' => $periode])->with('success', 'Data jadwal berhasil disimpan');
    }

    public function show($unit, $jadwal, $periode)
    {
        $datajadwal = \App\Models\Jadwal::find($jadwal);
        dd($datajadwal);
        $pesertas = \ProtoneMedia\Splade\SpladeTable::
                                for(\App\Models\Kelas::where('jadwal_id', $jadwal->id)->get())
                                ->column('peserta.nama')
                                ;
                                dd($jadwal);
        return view('dashboard.admin.periode.jadwal.show', compact('unit', 'jadwal', 'pesertas', 'periode'));
    }

    public function edit($unit, $jadwal, $periode)
    {
        $table = $this->getJadwalTable($unit);
        $jadwal = \App\Models\Jadwal::find($jadwal);
        $pengajars = \App\Models\User::selectRaw("id, concat(name, ' (', phone_number, ')') as name")
            ->whereHas('pengajar.unit', function ($query) use ($unit) {
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
        return view('dashboard.admin.periode.jadwal.edit', compact('unit', 'table', 'jadwal', 'pengajars', 'periodes', 'hari', 'status_belajar', 'level', 'jenis', 'periode'));
    }

    public function update(Request $request, $unit, $jadwal, $periode)
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

    public function destroy($unit, $jadwal, $periode)
    {
        try {
            $jadwal = \App\Models\Jadwal::findOrFail($jadwal);
            $jadwal->delete();
            Toast::message('Data berhasil di hapus')->autoDismiss(5);
        } catch (\Exception $e) {
            Toast::warning('Terjadi kesalahan, data gagal dihapus')->autoDismiss(5);
        }
        return redirect()->route('admin.periode.jadwal.index', ['unit' => $unit])->with('success', 'Data jadwal berhasil dihapus');
    }
}

