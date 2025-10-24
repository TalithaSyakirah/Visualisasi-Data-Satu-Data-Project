<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ipmkabupatenkota;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class IpmKabupatenKotaController extends Controller
{
    // ➕ Tambah data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'kabupaten_sambas' => 'required|numeric',
            'kabupaten_bengkayang' => 'required|numeric',
            'kabupaten_landak' => 'required|numeric',
            'kabupaten_mempawah' => 'required|numeric',
            'kabupaten_sanggau' => 'required|numeric',
            'kabupaten_ketapang' => 'required|numeric',
            'kabupaten_sintang' => 'required|numeric',
            'kabupaten_kapuas_hulu' => 'required|numeric',
            'kabupaten_sekadau' => 'required|numeric',
            'kabupaten_melawi' => 'required|numeric',
            'kabupaten_kayong_utara' => 'required|numeric',
            'kabupaten_kubu_raya' => 'required|numeric',
            'kota_pontianak' => 'required|numeric',
            'kota_singkawang' => 'required|numeric',
        ]);

        ipmkabupatenkota::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data IPM Kabupaten/Kota berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(ipmkabupatenkota $ipmkabupatenkota): RedirectResponse
    {
        $ipmkabupatenkota->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data IPM Kabupaten/Kota berhasil dihapus.');
    }

    // 🛠️ Form edit
    public function viewUpdate(ipmkabupatenkota $ipmkabupatenkota): View
    {
        return view('update.viewUpdate_ipmkabupatenkota', compact('ipmkabupatenkota'));
    }

    // 🔄 Update data
    public function update(Request $request, ipmkabupatenkota $ipmkabupatenkota): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'kabupaten_sambas' => 'required|numeric',
            'kabupaten_bengkayang' => 'required|numeric',
            'kabupaten_landak' => 'required|numeric',
            'kabupaten_mempawah' => 'required|numeric',
            'kabupaten_sanggau' => 'required|numeric',
            'kabupaten_ketapang' => 'required|numeric',
            'kabupaten_sintang' => 'required|numeric',
            'kabupaten_kapuas_hulu' => 'required|numeric',
            'kabupaten_sekadau' => 'required|numeric',
            'kabupaten_melawi' => 'required|numeric',
            'kabupaten_kayong_utara' => 'required|numeric',
            'kabupaten_kubu_raya' => 'required|numeric',
            'kota_pontianak' => 'required|numeric',
            'kota_singkawang' => 'required|numeric',
        ]);

        $ipmkabupatenkota->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data IPM Kabupaten/Kota berhasil diperbarui.');
    }
}
