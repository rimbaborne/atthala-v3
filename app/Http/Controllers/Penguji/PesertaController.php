<?php

namespace App\Http\Controllers\Penguji;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PesertaController extends Controller
{

    public function index()
    {
        $pesertas = \App\Models\Peserta::latest()->get();
        return view('dashboard.penguji.peserta.index', compact('pesertas'));
    }

    public function create()
    {
        return view('dashboard.penguji.peserta.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pesertas',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        \App\Models\Peserta::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('dashboard.penguji.peserta.index')->with('success', 'Peserta berhasil ditambahkan');
    }

    public function edit(\App\Models\Peserta $peserta)
    {
        return view('dashboard.penguji.peserta.edit', compact('peserta'));
    }

    public function update(Request $request, \App\Models\Peserta $peserta)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:pesertas,email,' . $peserta->id
        ]);

        $peserta->update([
            'nama' => $request->nama,
            'email' => $request->email
        ]);

        return redirect()->route('dashboard.penguji.peserta.index')->with('success', 'Peserta berhasil diupdate');
    }

    public function destroy(\App\Models\Peserta $peserta)
    {
        $peserta->delete();

        return redirect()->route('dashboard.penguji.peserta.index')->with('success', 'Peserta berhasil dihapus');
    }
}
