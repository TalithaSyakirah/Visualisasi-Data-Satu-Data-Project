<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bekerjamenurutlapanganusaha;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class bekerjamenurutlapanganusahacontroller extends Controller
{
    // ➕ Tambah data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'pertanian_kehutanan_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri' => 'required|numeric',
            'listrik_gas_air' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_akomodasi' => 'required|numeric',
            'transportasi_komunikasi' => 'required|numeric',
            'keuangan_real_estate' => 'required|numeric',
            'jasa_kemasyarakatan_lainnya' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        bekerjamenurutlapanganusaha::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Bekerja Menurut Lapangan Usaha berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(bekerjamenurutlapanganusaha $bekerjamenurutlapanganusaha): RedirectResponse
    {
        $bekerjamenurutlapanganusaha->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data Bekerja Menurut Lapangan Usaha berhasil dihapus.');
    }

    // 🛠️ Form edit
    public function viewUpdate(bekerjamenurutlapanganusaha $bekerjamenurutlapanganusaha): View
    {
        return view('update.viewUpdate_bekerjamenurutlapanganusaha', compact('bekerjamenurutlapanganusaha'));
    }

    // 🔄 Update data
    public function update(Request $request, bekerjamenurutlapanganusaha $bekerjamenurutlapanganusaha): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'pertanian_kehutanan_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri' => 'required|numeric',
            'listrik_gas_air' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_akomodasi' => 'required|numeric',
            'transportasi_komunikasi' => 'required|numeric',
            'keuangan_real_estate' => 'required|numeric',
            'jasa_kemasyarakatan_lainnya' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $bekerjamenurutlapanganusaha->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Bekerja Menurut Lapangan Usaha berhasil diperbarui.');
    }
}
