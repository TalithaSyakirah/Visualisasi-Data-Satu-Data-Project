<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tingkatpengangguranterbuka;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class tingkatpengangguranterbukacontroller extends Controller
{
    // ➕ Tambah data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer|unique:tingkatpengangguranterbukas,tahun',
            'tingkat_pengangguran_terbuka' => 'required|numeric',
        ]);

        tingkatpengangguranterbuka::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Tingkat Pengangguran Terbuka berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(tingkatpengangguranterbuka $tingkatpengangguranterbuka): RedirectResponse
    {
        $tingkatpengangguranterbuka->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data Tingkat Pengangguran Terbuka berhasil dihapus.');
    }

    // 🛠️ Form edit
    public function viewUpdate(tingkatpengangguranterbuka $tingkatpengangguranterbuka): View
    {
        return view('update.viewUpdate_tingkatpengangguranterbuka', compact('tingkatpengangguranterbuka'));
    }

    // 🔄 Update data
    public function update(Request $request, tingkatpengangguranterbuka $tingkatpengangguranterbuka): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'tingkat_pengangguran_terbuka' => 'required|numeric',
        ]);

        $tingkatpengangguranterbuka->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Tingkat Pengangguran Terbuka berhasil diperbarui.');
    }
}
