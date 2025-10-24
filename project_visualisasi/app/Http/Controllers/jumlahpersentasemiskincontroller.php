<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jumlahpersentasemiskin;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class jumlahpersentasemiskincontroller extends Controller
{
    // ➕ Simpan data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'garis_kemiskinan' => 'required|integer',
            'jumlah_penduduk_miskin' => 'required|numeric',
            'persentase_penduduk_miskin' => 'required|numeric',
        ]);

        jumlahpersentasemiskin::create([
            'tahun' => $request->tahun,
            'garis_kemiskinan' => $request->garis_kemiskinan,
            'jumlah_penduduk_miskin' => $request->jumlah_penduduk_miskin,
            'persentase_penduduk_miskin' => $request->persentase_penduduk_miskin,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(jumlahpersentasemiskin $jumlahpersentasemiskin): RedirectResponse
    {
        $jumlahpersentasemiskin->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus.');
    }

    // 🛠️ Form Edit
    public function viewUpdate(jumlahpersentasemiskin $jumlahpersentasemiskin): View
    {
        return view('update.viewUpdate_jumlahpersentasemiskin', [
            'jumlahpersentasemiskin' => $jumlahpersentasemiskin,
        ]);
    }

    // 🔄 Update data
    public function update(Request $request, jumlahpersentasemiskin $jumlahpersentasemiskin): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'garis_kemiskinan' => 'required|integer',
            'jumlah_penduduk_miskin' => 'required|numeric',
            'persentase_penduduk_miskin' => 'required|numeric',
        ]);

        $jumlahpersentasemiskin->update([
            'tahun' => $request->tahun,
            'garis_kemiskinan' => $request->garis_kemiskinan,
            'jumlah_penduduk_miskin' => $request->jumlah_penduduk_miskin,
            'persentase_penduduk_miskin' => $request->persentase_penduduk_miskin,
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui.');
    }
}
