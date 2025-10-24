<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kondisiketenagakerjaan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class kondisiketenagakerjaancontroller extends Controller
{
    // ➕ Tambah data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'angkatan_kerja' => 'required|integer',
            'bukan_angkatan_kerja' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        kondisiketenagakerjaan::create([
            'tahun' => $request->tahun,
            'angkatan_kerja' => $request->angkatan_kerja,
            'bukan_angkatan_kerja' => $request->bukan_angkatan_kerja,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data Kondisi Ketenagakerjaan berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(kondisiketenagakerjaan $kondisiketenagakerjaan): RedirectResponse
    {
        $kondisiketenagakerjaan->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data Kondisi Ketenagakerjaan berhasil dihapus.');
    }

    // 🛠️ Tampilkan form edit/update
    public function viewUpdate(kondisiketenagakerjaan $kondisiketenagakerjaan): View
    {
        return view('update.viewUpdate_kondisiketenagakerjaan', ['kondisiketenagakerjaan' => $kondisiketenagakerjaan]);
    }

    // 🔄 Update data
    public function update(Request $request, kondisiketenagakerjaan $kondisiketenagakerjaan): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'angkatan_kerja' => 'required|integer',
            'bukan_angkatan_kerja' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $kondisiketenagakerjaan->update([
            'tahun' => $request->tahun,
            'angkatan_kerja' => $request->angkatan_kerja,
            'bukan_angkatan_kerja' => $request->bukan_angkatan_kerja,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data Kondisi Ketenagakerjaan berhasil diperbarui.');
    }
}
