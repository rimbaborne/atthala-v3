<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tables\PembayaranTahsin;

class PembayaranController extends Controller
{
    public function index($unit)
    {
        $pembayaran = PembayaranTahsin::class;
        return view('modules.pembayaran.index', compact('unit', 'pembayaran'));
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
