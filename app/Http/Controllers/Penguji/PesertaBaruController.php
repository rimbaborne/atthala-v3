<?php

namespace App\Http\Controllers\Penguji;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Modules\Unit;
use App\Tables\Penguji\DataPengujiPesertaBaru;
use App\Traits\CekUnitTrait;
use App\Models\Modules\Level;
use ProtoneMedia\Splade\Facades\Toast;
use App\Contracts\NotificationService;
use App\Traits\FormatPesanNotifTahsinDaftarBaruTrait;



class PesertaBaruController extends Controller
{
    use CekUnitTrait;
    use FormatPesanNotifTahsinDaftarBaruTrait;
    private $notifService;

    public function __construct(NotificationService $notifService)
    {
        $this->notifService = $notifService;
    }
    public function index($unit)
    {
        $pesertas = new DataPengujiPesertaBaru($this->cekUnit($unit));
        return view('dashboard.penguji.peserta-baru.index', compact('pesertas', 'unit'));
    }


    public function show($unit, $id)
    {
        $data = Kelas::find($id);
        $datalevel = Level::where('unit_id', $this->cekUnit($unit))->get();
        return view('dashboard.penguji.peserta-baru.show', compact('data', 'unit', 'datalevel'));
    }

    public function update(Request $request, $unit, $id)
    {
        $nilai[]['level_hasil_penguji'] = $request->status;
        $pesertaBaru = Kelas::find($id);
        $pesertaBaru->data_nilai = $nilai;
        $pesertaBaru->update();

        $this->notifService->kirimNotifWa($pesertaBaru->peserta->phone_number, $this->NotifTahsinDaftarBaruHasil($request->status, $pesertaBaru->uuid));

        Toast::title('Hasil Berhasil Disimpan & Notif Hasil Berhasil Dikirim ke peserta baru !');
        return redirect()->back();
    }

    public function destroy($unit, $id)
    {
        $pesertaBaru = Kelas::find($id);
        $pesertaBaru->delete();

        return redirect()->route('dashboard.penguji.peserta-baru.index')->with('success', 'Peserta Baru berhasil dihapus');
    }
}
