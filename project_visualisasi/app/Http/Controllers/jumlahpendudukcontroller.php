<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jumlahpenduduk;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class JumlahPendudukController extends Controller
{
    // 🧾 Tampilkan semua data
    // public function index(): View
    // {
    //     $jumlahpenduduks = jumlahpenduduk::all();
    //     return view('index', ['jumlahpenduduks' => $jumlahpenduduks]);
    // }

    // ➕ Simpan data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'lakilaki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        jumlahpenduduk::create([
            'tahun' => $request->tahun,
            'lakilaki' => $request->lakilaki,
            'perempuan' => $request->perempuan,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(jumlahpenduduk $jumlahpenduduk): RedirectResponse
    {
        $jumlahpenduduk->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // 🛠️ Tampilkan form edit/update
    public function viewUpdate(jumlahpenduduk $jumlahpenduduk): View
    {
        return view('update.viewUpdate_jumlahpenduduk', ['jumlahpenduduk' => $jumlahpenduduk]);
    }

    // 🔄 Update data
    public function update(Request $request, jumlahpenduduk $jumlahpenduduk): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'lakilaki' => 'required|integer',
            'perempuan' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $jumlahpenduduk->update([
            'tahun' => $request->tahun,
            'lakilaki' => $request->lakilaki,
            'perempuan' => $request->perempuan,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
