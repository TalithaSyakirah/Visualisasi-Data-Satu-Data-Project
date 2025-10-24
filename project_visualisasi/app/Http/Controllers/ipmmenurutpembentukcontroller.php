<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ipmmenurutpembentuk;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ipmmenurutpembentukcontroller extends Controller
{
    // ➕ Tambah data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'angka_harapan_hidup' => 'required|numeric',
            'harapan_lama_sekolah' => 'required|numeric',
            'rata_rata_lama_sekolah' => 'required|numeric',
            'pengeluaran_per_kapita' => 'required|integer',
            'indeks_pembangunan_manusia' => 'required|numeric',
        ]);

        ipmmenurutpembentuk::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data IPM berhasil ditambahkan.');
    }

    // 🗑️ Hapus data
    public function destroy(ipmmenurutpembentuk $ipmmenurutpembentuk): RedirectResponse
    {
        $ipmmenurutpembentuk->delete();
        return redirect()->route('dashboard.index')->with('success', 'Data IPM berhasil dihapus.');
    }

    // 🛠️ Form edit
    public function viewUpdate(ipmmenurutpembentuk $ipmmenurutpembentuk): View
    {
        return view('update.viewUpdate_ipmmenurutpembentuk', compact('ipmmenurutpembentuk'));
    }

    // 🔄 Update data
    public function update(Request $request, ipmmenurutpembentuk $ipmmenurutpembentuk): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'angka_harapan_hidup' => 'required|numeric',
            'harapan_lama_sekolah' => 'required|numeric',
            'rata_rata_lama_sekolah' => 'required|numeric',
            'pengeluaran_per_kapita' => 'required|integer',
            'indeks_pembangunan_manusia' => 'required|numeric',
        ]);

        $ipmmenurutpembentuk->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data IPM berhasil diperbarui.');
    }
}
